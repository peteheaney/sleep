<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'Sleep',
	'pi_version' =>'1.0',
	'pi_author' =>'Pete Heaney',
	'pi_description' => 'Creates a delay in the loading of a template',
	'pi_usage' => Sleep::usage()
);

class Sleep {

	public function __construct()
	{
		$this->EE =& get_instance();
	}

	public function now()
	{
		sleep( $this->EE->TMPL->fetch_param('secs') );
	}

	static function usage()
  {
  ob_start();
  ?>
{exp:sleep:for secs="5"}
  <?php
  $buffer = ob_get_contents();

  ob_end_clean();

  return $buffer;
  }

}

/* End of file pi.sleep.php */
