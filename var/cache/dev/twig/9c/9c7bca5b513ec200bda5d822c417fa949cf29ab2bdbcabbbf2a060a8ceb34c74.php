<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27dac94995b3677a8d82d54fab166343096b2506c73bbf2f96d2f5639450e08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27dac94995b3677a8d82d54fab166343096b2506c73bbf2f96d2f5639450e08b->enter($__internal_27dac94995b3677a8d82d54fab166343096b2506c73bbf2f96d2f5639450e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9c387d78cf762a85c4c0845349f0f5ca87ceae137f880beb530c1770571ca530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c387d78cf762a85c4c0845349f0f5ca87ceae137f880beb530c1770571ca530->enter($__internal_9c387d78cf762a85c4c0845349f0f5ca87ceae137f880beb530c1770571ca530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_27dac94995b3677a8d82d54fab166343096b2506c73bbf2f96d2f5639450e08b->leave($__internal_27dac94995b3677a8d82d54fab166343096b2506c73bbf2f96d2f5639450e08b_prof);

        
        $__internal_9c387d78cf762a85c4c0845349f0f5ca87ceae137f880beb530c1770571ca530->leave($__internal_9c387d78cf762a85c4c0845349f0f5ca87ceae137f880beb530c1770571ca530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
