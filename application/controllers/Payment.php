<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Payment extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Payment_model', 'payment');
    $this->load->model('participant_model', 'participant');
    //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Participant Payments';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['payment'] = $this->payment->get_payment();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('payment/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    // code...
    $data['title'] = 'Participant Payment Detail';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['payment'] = $this->payment->get_payment($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('payment/detail', $data);
    $this->load->view('templates/footer');
  }

  public function validate_payment($id)
  {
    $payment = $this->payment->get_payment($id);
    $id_payment_type = $payment[0]['id_payment_type'];
    $id_participant = $payment[0]['id_participant'];

    echo ($id_payment_type);

    if ($id_payment_type == 1) {
      $status = 2;
    } else if ($id_payment_type == 2) {
      $status = 3;
    } else if ($id_payment_type == 3) {
      $status = 4;
    }

    $payment_data = array(
      'payment_status' => 1,
      'id_admin' =>  $this->session->userdata('id_admin'),
    );

    //update partcipant status
    $data = array(
      'status' => $status
    );

    $this->payment->update_payment($payment_data, $id);
    $this->participant->update_participant_status($data, $id_participant);

    $this->send_email($id_participant);

    $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Payment validation success!</div>');
    redirect('payment/index');
  }

  public function invalidate_payment($id)
  {
    $payment_data = array(
      'payment_status' => 2,
      'id_admin' =>  $this->session->userdata('id_admin'),
    );

    $this->payment->update_payment($payment_data, $id);

    $this->session->set_flashdata('message', '<div class ="alert alert-danger" style="text-align-center" role ="alert"> Payment invalidation success!</div>');
    redirect('payment/index');
  }

  public function send_email($id)
  {
    $participant = $this->participant->get_participant_detail($id);
    $from_email = "istanbulyouthsummit@gmail.com";
    $to_email = $participant[0]['email'];
    $to_name = $participant[0]['full_name'];

    $subject = "Registration Fee Payment Validation Notice";
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->SMTPDebug  = FALSE;
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'ssl://smtp.googlemail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'istanbulyouthsummit@gmail.com';                     //SMTP username
      $mail->Password   = 'iysybb16';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom($from_email, 'The 5th Istanbul Youth Summit');
      $mail->addAddress($to_email);     //Add a recipient

      //Attachments
      $mail->addAttachment('./assets/img/Registered_ticket.jpg', 'Registered Ticket');         //Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = '<div style="margin: 0; padding: 0;">
      <style type="text/css">
          a[x-apple-data-detectors] {
              color: inherit !important;
          }
      </style>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
              <td style="padding: 20px 0 30px 0;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
                      <tr>
                          <td align="center" bgcolor="#dca823" style="padding: 40px 0 30px 0;">
                              <h1 style=" font-family: Arial, sans-serif;font-size: 24px; margin: 0; color:#000000;">Registration Fee Payment Validation</h1>
                          </td>
                      </tr>
                      <tr>
                          <td bgcolor="#000000" style="padding: 40px 30px 0px 30px;">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                  <tr>
                                      <td style="color: #dca823; font-family: Arial, sans-serif;">
                                          <h1 style="font-size: 24px; margin: 0;">Congratulations, ' . $to_name . '!</h1>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff; text-align:justify;">
                                              We are glad to inform you that your registration fee payment has been validated. You are now a valid participant of the 5th Istanbul Youth Summit.
                                          </p>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff; text-align:justify;">
                                              Attached is an image poster abour your participation in this summit. Take a screenshot or download it, and share it to your Instagram and tag us <a href="https://instagram.com/istanbulyouthsummit" target="_blank">(@istanbulyouthsummit)</a>. You may be featured on our Instagram story.
                                          </p>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff; text-align:justify;">
                                              If you have any questions about the 5th Istanbul Youth Summit, you can contact us at (+62 812 1846 3506) or reply this email.
                                          </p>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff; text-align:justify;">
                                              Let others know that you are ready for the 5th Istanbul Youth Summit. We look forward to seeing you in Istanbul soon.
                                          </p>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff;">
                                              Best regards,
                                          </p>
                                          <p style="margin: 0; color:#ffffff;">
                                              The 5th Istanbul Youth Summit Team
                                          </p>
                                      </td>

                                  </tr>
                                  <tr>
                                      <td align="center">
                                          <img src="https://ybbfoundation.com/assets/img/iys_logo_white.png" alt="The 5th Istanbul Youth Summit" width="200" height="70" style="padding: 20px 20px;" />
                                      </td>
                                  </tr>
                              </table>
                          </td>
                      </tr>
                      <tr>
                          <td bgcolor="#dca823" style="padding: 30px 30px;">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                  <tr>
                                      <td style="color: #000000; font-family: Arial, sans-serif; font-size: 14px;" align="center">
                                          <p style="margin: 0;">&reg; The 5th Istanbul Youth Summit @ 2021 - 2022<br />
                                      </td>
                                  </tr>
                                  <tr>
                                      <td align="center">
                                          <a href="https://iys.youthbreaktheboundaries.com/" target="_blank">www.iys.youthbreaktheboundaries.com</a><br>
                                      </td>
                                  </tr>
                              </table>
                          </td>
                      </tr>
                  </table>
              </td>
          </tr>
      </table>
  </div>';

      $mail->send();
      //echo 'Message has been sent';
    } catch (Exception $e) {
      //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
}
