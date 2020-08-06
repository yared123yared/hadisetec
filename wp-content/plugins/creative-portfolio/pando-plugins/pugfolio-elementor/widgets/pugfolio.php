<?php
namespace PandoExtra\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Pando_Pugfolio extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'pugfolio';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Pugfolio', 'pugfolio' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general-elements' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'pugfolio' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Portfolio Settings', 'pugfolio' ),
			]
		);

		$this->add_control(
		  'postsperpage',
		  [
		     'label'   => __( 'Number of projects to show', 'pugfolio' ),
		     'type'    => Controls_Manager::NUMBER,
		     'default' => 12,
		     'min'     => 1,
		     'max'     => 60,
		     'step'    => 1,
		  ]
		);


		$this->add_control(
			'showfilter',
			[
				'label' => __( 'Show category filter?', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'no',
				'options' => [
					'yes' => __( 'Yes', 'pugfolio' ),
					'no' => __( 'No', 'pugfolio' ),
				]
			]
		);

		$this->add_control(
			'type',
			[
				'label' => __( 'Display specific portfolio category', 'pugfolio' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => __( 'On', 'your-plugin' ),
				'label_off' => __( 'Off', 'your-plugin' ),
				'return_value' => 'yes',
			]
		);

		$portfolio_taxonomies = get_terms( array('taxonomy' => 'portfoliocategory', 'fields' => 'id=>name', 'hide_empty' => false, ) );

		$this->add_control(
			'taxonomy',
			[
				'label' => __( 'If yes, select wich portfolio category to show', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => $portfolio_taxonomies,
			]
		);

		$this->add_control(
			'margin',
			[
				'label' => __( 'Use item margin?', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes' => __( 'Yes', 'pugfolio' ),
					'no' => __( 'No', 'pugfolio' ),
				]
			]
		);

		$this->add_control(
			'columns',
			[
				'label' => __( 'Number of columns', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'2' => __( 'Two Columns', 'pugfolio' ),
					'3' => __( 'Three Columns', 'pugfolio' ),
					'4' => __( 'Four Columns', 'pugfolio' ),
				]
			]
		);

		$this->add_control(
			'style',
			[
				'label' => __( 'Grid Style', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'box',
				'options' => [
					'masonry' => __( 'Masonry', 'pugfolio' ),
					'box' => __( 'Boxes', 'pugfolio' ),				]
			]
		);

		$this->add_control(
			'linkto',
			[
				'label' => __( 'Each project links to', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'project',
				'options' => [
					'image' => __( 'Featured Image into Lightbox', 'pugfolio' ),
					'project' => __( 'Project Details Page', 'pugfolio' ),				]
			]
		);

		$this->end_controls_section();

		/*$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'pugfolio' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'pugfolio' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'pugfolio' ),
					'uppercase' => __( 'UPPERCASE', 'pugfolio' ),
					'lowercase' => __( 'lowercase', 'pugfolio' ),
					'capitalize' => __( 'Capitalize', 'pugfolio' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
				],
			]
		);*/

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();
		?>

		<div class="pando-slideshow">
			<?php echo do_shortcode('[pugfolio postsperpage="'.$settings['postsperpage'].'" type="'.$settings['type'].'" taxonomy="'.$settings['taxonomy'].'" showfilter="'.$settings['showfilter'].'" style="'.$settings['style'].'" margin="'.$settings['margin'].'" columns="'.$settings['columns'].'" linkto="'.$settings['linkto'].'"]'); ?>
		</div>

		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	/*protected function _content_template() {
		$sliderheight = $settings['slider_height'];
		?>
		
		<div class="pando-slideshow">
			<?php echo do_shortcode('[pando-slider heightstyle="'.$sliderheight.'"]'); ?>
		</div>


		<?php
	}*/
}