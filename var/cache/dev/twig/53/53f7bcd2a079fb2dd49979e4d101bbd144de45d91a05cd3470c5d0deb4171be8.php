<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_ca5dc623a0ebc59980a12e1fe29b95429e8813b3dbf122b490e8873ce3c969f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5dc623a0ebc59980a12e1fe29b95429e8813b3dbf122b490e8873ce3c969f1->enter($__internal_ca5dc623a0ebc59980a12e1fe29b95429e8813b3dbf122b490e8873ce3c969f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d13cb86f45255141278feb765489b522fc6587d6b276bfe1486b4d56f8f8d466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13cb86f45255141278feb765489b522fc6587d6b276bfe1486b4d56f8f8d466->enter($__internal_d13cb86f45255141278feb765489b522fc6587d6b276bfe1486b4d56f8f8d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ca5dc623a0ebc59980a12e1fe29b95429e8813b3dbf122b490e8873ce3c969f1->leave($__internal_ca5dc623a0ebc59980a12e1fe29b95429e8813b3dbf122b490e8873ce3c969f1_prof);

        
        $__internal_d13cb86f45255141278feb765489b522fc6587d6b276bfe1486b4d56f8f8d466->leave($__internal_d13cb86f45255141278feb765489b522fc6587d6b276bfe1486b4d56f8f8d466_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
