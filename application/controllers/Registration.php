<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Country_model', 'country');
        $this->load->model('Participant_model', 'participant');
    }

    public function index()
    {
        $data['countries'] = $this->country->get_countries();
        $this->load->view('auth/registration', $data);
    }

    public function save_new_participants()
    {
        $id_participant = $this->input->post('id');
        $photo = $this->input->post('image');
        $full_name = $this->input->post('fullname');
        $birthdate = $this->input->post('birthdate');
        $gender = $this->input->post('gender');
        $address = $this->input->post('address');
        $nationality = $this->input->post('nationality');
        $occupation = $this->input->post('occupation');
        $field_of_study = $this->input->post('field');
        $instituion = $this->input->post('institution');
        $emergency_contact = $this->input->post('emergency');
        $wa_number = $this->input->post('wa');
        $ig_account = $this->input->post('ig');
        $tshirt_size = $this->input->post('tshirt');
        $disease_history = $this->input->post('disease');
        $contact_relation = $this->input->post('relation');
        $is_vegetarian = $this->input->post('vegetarian');
        $tshirt_size = $this->input->post('tshirt');
        $subtheme = $this->input->post('subtheme');
        $essay = $this->input->post('essay');
        $social_projects = $this->input->post('social');
        $talents = $this->input->post('talents');
        $achievements = $this->input->post('achievements');
        $experiences = $this->input->post('experiences');
        $know_program_from = $this->input->post('know');
        $source_account_name = $this->input->post('source');
        $video_link = $this->input->post('videolink');
        $referral_code = $this->input->post('referral');

        $str = $_FILES['image']['name'];
        $upload_image = str_replace(' ', '_', $str);

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profile/participants/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $data = [
                    'id_participant' => $id_participant,
                    'photo' => $photo,
                    'full_name' => $full_name,
                    'birthdate' => $birthdate,
                    'gender' => $gender,
                    'address' => $address,
                    'nationality' => $nationality,
                    'occupation' => $occupation,
                    'field_of_study' => $field_of_study,
                    'institution' => $instituion,
                    'emergency_contact' => $emergency_contact,
                    'wa_number' =>  $wa_number,
                    'ig_account' => $ig_account,
                    'tshirt_size' => $tshirt_size,
                    'disease_history' => $disease_history,
                    'contact_relation' => $contact_relation,
                    'is_vegetarian' => $is_vegetarian,
                    'subtheme' => $subtheme,
                    'essay' => $essay,
                    'social_projects' => $social_projects,
                    'talents' => $talents,
                    'achievements' => $achievements,
                    'experiences' => $experiences,
                    'know_program_from' => $know_program_from,
                    'source_account_name' => $source_account_name,
                    'video_link' => $video_link,
                    'referral' => $referral_code,
                ];

                $res = $this->participant->add_participant_details($data);
                $participant = $this->participant->get_participant_detail($id_participant);

                //send email
                $this->send_email($id_participant, $full_name);
            }
        }
    }

    public function send_email($id, $name)
    {
        $participant = $this->participant->get_participant_detail($id);
        $from_email = "istanbulyouthsummit@gmail.com";
        $to_email = $participant[0]['email'];

        $subject = "Registration Form Completion Notice";
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
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
            //$mail->addAttachment('./assets/img/logo.png', 'Logo');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = '<div style="margin: 0; padding: 0;">
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
                              <h1 style=" font-family: Arial, sans-serif;font-size: 24px; margin: 0; color:#000000;">Registration Form Completion</h1>
                          </td>
                      </tr>
                      <tr>
                          <td bgcolor="#000000" style="padding: 40px 30px 0px 30px;">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                  <tr>
                                      <td style="color: #dca823; font-family: Arial, sans-serif;">
                                          <h1 style="font-size: 24px; margin: 0;">Dear, ' . $name . '!</h1>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff; text-align:justify;">
                                              Thank you for your interest in participating in the 5th Istanbul Youth Summit. Your registration form is complete. Now you can proceed with the registration fee payment.
                                          </p>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 0 0;">
                                          <p style="margin: 0; color:#ffffff; text-align:justify;">
                                              The registration fee is <b>10 USD</b> or <b>125.000 IDR</b>. Once the payment has been made, upload the payment proof on the YBB app. Below is the payment account information of the 5th Istanbul Youth Summit:
                                          </p>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="padding: 20px 0px 0px 0px;">
                                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; border: 1px solid #ffffff;">
                                              <thead>
                                                  <tr>
                                                      <th style="padding: 10px 10px; color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center" colspan="3">
                                                          <p style="margin: 0; color:#ffffff">Bank Transfer <b>(*Indonesians only)</b></p>
                                                      </th>
                                                  </tr>
                                                  <tr>
                                                      <th style=" padding: 10px 10px;color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">Bank name</p>
                                                      </th>
                                                      <th style=" padding: 10px 10px;color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">Account Holder Name</p>
                                                      </th>
                                                      <th style=" padding: 10px 10px;color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">Account Number</p>
                                                      </th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td style=" padding: 10px 10px;color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">Bank Central Asia (BCA)</p>
                                                      </td>
                                                      <td style="padding: 10px 10px; color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">Meldi Latifah Saraswati</p>
                                                      </td>
                                                      <td style="padding: 10px 10px; color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">0374505145</p>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="padding: 20px 0px 0px 0px;">
                                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; border: 1px solid #ffffff;">
                                              <thead>
                                                  <tr>
                                                      <th style="padding: 10px 10px; color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center" colspan="2" rowspan="2">
                                                          <p style="margin: 0; color:#ffffff">PayPal</p>
                                                      </th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td style="padding: 10px 10px; color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">paypal.me/aldisubakti</p>
                                                      </td>
                                                      <td style="padding: 10px 10px; color: #cccccc; font-family: Arial, sans-serif; font-size: 14px; vertical-align: middle; border-color: #ffffff; border-style: solid; border-width: 1px;" align="center">
                                                          <p style="margin: 0; color:#ffffff">Subaktialdi88@gmail.com</p>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
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
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
