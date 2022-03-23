<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
  //
  public $CI;

  /**
   * An array of variables to be passed through to the
   * view, layout,....
   */
  protected $data = array();

  /**
   * [__construct description]
   *
   * @method __construct
   */
  public function __construct()
  {
    // To inherit directly the attributes of the parent class.
    parent::__construct();

    // This function returns the main CodeIgniter object.
    // Normally, to call any of the available CodeIgniter object or pre defined library classes then you need to declare.
    $CI = &get_instance();

    // Copyright year calculation for the footer
    $begin = 2019;
    $end =  date("Y");
    $date = "$begin - $end";

    // Copyright
    $this->data['copyright'] = $date;

    $this->load->library('markdown');

    if (isset($_GET['locale'])) {
      $newdata = array(
        'locale'  => $_GET['locale']
      );

      $this->session->set_userdata($newdata);
    }

    if ($this->session->userdata('locale') == null) {
      $newdata = array(
        'locale'  => 'en'
      );

      $this->session->set_userdata($newdata);
    }
  }

  public function get($url = '', $locale = true)
  {

    $curl = curl_init();

    if ($locale) {
      $url = preg_match('/\?/', $url) ? ($url . '&' . $this->getLocale()) : ($url . '?' . $this->getLocale());
    }

    curl_setopt_array($curl, array(
      //CURLOPT_PORT => "1337",
      CURLOPT_URL => STRAPI_URL . $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      $filename = LOG_PATH . DIRECTORY_SEPARATOR . 'error.log';
      fopen($filename, 'w');
      file_put_contents($filename, $err . PHP_EOL, FILE_APPEND | LOCK_EX);
      header('Location: ' . base_url() . 'internalservererror');
      return;
      // throw new Exception("Get error");
      // echo "cURL Error #:" . $err;
    } else {
      return json_decode($response);
    }
  }

  public function getLocale()
  {
    return "_locale=" . $this->session->userdata('locale');
  }
}
