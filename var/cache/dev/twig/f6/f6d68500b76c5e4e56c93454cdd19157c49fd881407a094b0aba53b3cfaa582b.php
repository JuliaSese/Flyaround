<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_74c3372a33afbfb5869555cc92f2e008cf33a567ad323c246715ad55a1b67da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c3372a33afbfb5869555cc92f2e008cf33a567ad323c246715ad55a1b67da7->enter($__internal_74c3372a33afbfb5869555cc92f2e008cf33a567ad323c246715ad55a1b67da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_df1f18abe3bc22eb1d01aca8c3e071344440406ab96a6665092d04babc5d0553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1f18abe3bc22eb1d01aca8c3e071344440406ab96a6665092d04babc5d0553->enter($__internal_df1f18abe3bc22eb1d01aca8c3e071344440406ab96a6665092d04babc5d0553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_74c3372a33afbfb5869555cc92f2e008cf33a567ad323c246715ad55a1b67da7->leave($__internal_74c3372a33afbfb5869555cc92f2e008cf33a567ad323c246715ad55a1b67da7_prof);

        
        $__internal_df1f18abe3bc22eb1d01aca8c3e071344440406ab96a6665092d04babc5d0553->leave($__internal_df1f18abe3bc22eb1d01aca8c3e071344440406ab96a6665092d04babc5d0553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
