<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed.');

/**
 * Very simple plugin to output the current page URI.
 *
 * @author					Stephen Lewis <addons@experienceinternet.co.uk>
 * @package					You Are Here
 * @version					1.0.0
 */

/**
 * Plugin information.
 *
 * @var		array
 */
$plugin_info = array(
	'pi_author'			=> 'Stephen Lewis <addons@experienceinternet.co.uk>',
	'pi_author_url'		=> 'http://experienceinternet.co.uk/software/',
	'pi_description'	=> 'Outputs the URI of the current page.',
	'pi_name'			=> 'You Are Here',
	'pi_usage'			=> You_are_here::usage(),
	'pi_version'		=> '1.0.0'
);


class You_are_here {
	
	/* --------------------------------------------------------------
	 * PRIVATE PROPERTIES
	 * ------------------------------------------------------------ */
	
	/**
	 * ExpressionEngine singleton.
	 *
	 * @access	private
	 * @var		object
	 */
	private $_ee;
	
	
	
	/* --------------------------------------------------------------
	 * PUBLIC PROPERTIES
	 * ------------------------------------------------------------ */
	
	/**
	 * Data returned from the plugin.
	 *
	 * @access	public
	 * @var		string
	 */
	public $return_data = '';
	
	
	
	/* --------------------------------------------------------------
	 * PUBLIC STATIC METHODS
	 * ------------------------------------------------------------ */
	
	/**
	 * Usage instructions.
	 *
	 * @access	public
	 * @return	string
	 */
	public static function usage()
	{
		return 'Example usage: {exp:you_are_here}';
	}
	
	
	
	/* --------------------------------------------------------------
	 * PUBLIC METHODS
	 * ------------------------------------------------------------ */
	
	/**
	 * Constructor.
	 *
	 * @access	public
	 * @return	void
	 */
	public function __construct()
	{
		$this->_ee			=& get_instance();
		$this->return_data	= $this->_ee->functions->fetch_current_uri();
	}
	
	
	/**
	 * Annoyingly, the supposedly PHP5-only EE2 still requires this PHP4
	 * constructor in order to function.
	 *
	 * @access	public
	 * @return	void
	 */
	public function You_are_here()
	{
		$this->__construct();
	}
	
}


/* End of file				: pi.you_are_here.php */
/* File location			: third_party/you_are_here/pi.you_are_here.php */