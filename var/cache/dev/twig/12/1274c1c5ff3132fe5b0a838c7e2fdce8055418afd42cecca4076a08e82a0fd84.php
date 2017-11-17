<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_0f3cfc95867e15e9846c1b6d62529511fd9ad6885795697a9c7fffd8191478f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3cfc95867e15e9846c1b6d62529511fd9ad6885795697a9c7fffd8191478f9->enter($__internal_0f3cfc95867e15e9846c1b6d62529511fd9ad6885795697a9c7fffd8191478f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fcdcea246741d833131c7548005bb2909e4867b2526f82dc154599463db5e11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdcea246741d833131c7548005bb2909e4867b2526f82dc154599463db5e11f->enter($__internal_fcdcea246741d833131c7548005bb2909e4867b2526f82dc154599463db5e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0f3cfc95867e15e9846c1b6d62529511fd9ad6885795697a9c7fffd8191478f9->leave($__internal_0f3cfc95867e15e9846c1b6d62529511fd9ad6885795697a9c7fffd8191478f9_prof);

        
        $__internal_fcdcea246741d833131c7548005bb2909e4867b2526f82dc154599463db5e11f->leave($__internal_fcdcea246741d833131c7548005bb2909e4867b2526f82dc154599463db5e11f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
