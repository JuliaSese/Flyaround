<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_1b1d6263b5c003200df686abd5fb39c50b1d9d0f08ab5d797a34806a6489bf4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1d6263b5c003200df686abd5fb39c50b1d9d0f08ab5d797a34806a6489bf4f->enter($__internal_1b1d6263b5c003200df686abd5fb39c50b1d9d0f08ab5d797a34806a6489bf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e1c601856f0138f8d24b732999998cb15bd9a7f291319f17aee1605185e84e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c601856f0138f8d24b732999998cb15bd9a7f291319f17aee1605185e84e3c->enter($__internal_e1c601856f0138f8d24b732999998cb15bd9a7f291319f17aee1605185e84e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1b1d6263b5c003200df686abd5fb39c50b1d9d0f08ab5d797a34806a6489bf4f->leave($__internal_1b1d6263b5c003200df686abd5fb39c50b1d9d0f08ab5d797a34806a6489bf4f_prof);

        
        $__internal_e1c601856f0138f8d24b732999998cb15bd9a7f291319f17aee1605185e84e3c->leave($__internal_e1c601856f0138f8d24b732999998cb15bd9a7f291319f17aee1605185e84e3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
