<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_af521126b3de1bf24c5dcc678efe4b8d835441327246ad1ec16203c7fee4fc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af521126b3de1bf24c5dcc678efe4b8d835441327246ad1ec16203c7fee4fc73->enter($__internal_af521126b3de1bf24c5dcc678efe4b8d835441327246ad1ec16203c7fee4fc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_db8dd953a72f51bf954963cb3da70566af40f629f845572365985bbc948a34fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8dd953a72f51bf954963cb3da70566af40f629f845572365985bbc948a34fd->enter($__internal_db8dd953a72f51bf954963cb3da70566af40f629f845572365985bbc948a34fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_af521126b3de1bf24c5dcc678efe4b8d835441327246ad1ec16203c7fee4fc73->leave($__internal_af521126b3de1bf24c5dcc678efe4b8d835441327246ad1ec16203c7fee4fc73_prof);

        
        $__internal_db8dd953a72f51bf954963cb3da70566af40f629f845572365985bbc948a34fd->leave($__internal_db8dd953a72f51bf954963cb3da70566af40f629f845572365985bbc948a34fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
