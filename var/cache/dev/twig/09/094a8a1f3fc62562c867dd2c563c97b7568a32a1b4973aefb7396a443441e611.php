<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_ad723c68b96a234df2a252cbc8a4dd0ac731abb5788f45123880409de915cf33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad723c68b96a234df2a252cbc8a4dd0ac731abb5788f45123880409de915cf33->enter($__internal_ad723c68b96a234df2a252cbc8a4dd0ac731abb5788f45123880409de915cf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c7a7d9276efe09816290c61a289d3fdbbc9bfecdca23aa7cfdb9fb2df380e06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a7d9276efe09816290c61a289d3fdbbc9bfecdca23aa7cfdb9fb2df380e06b->enter($__internal_c7a7d9276efe09816290c61a289d3fdbbc9bfecdca23aa7cfdb9fb2df380e06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ad723c68b96a234df2a252cbc8a4dd0ac731abb5788f45123880409de915cf33->leave($__internal_ad723c68b96a234df2a252cbc8a4dd0ac731abb5788f45123880409de915cf33_prof);

        
        $__internal_c7a7d9276efe09816290c61a289d3fdbbc9bfecdca23aa7cfdb9fb2df380e06b->leave($__internal_c7a7d9276efe09816290c61a289d3fdbbc9bfecdca23aa7cfdb9fb2df380e06b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
