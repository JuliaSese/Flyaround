<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_d70803409ed87f676aa4feea2e2d0830404021ca4cd4011b675f4f5aaa55e8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70803409ed87f676aa4feea2e2d0830404021ca4cd4011b675f4f5aaa55e8b5->enter($__internal_d70803409ed87f676aa4feea2e2d0830404021ca4cd4011b675f4f5aaa55e8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_599582c068c7177117ab7d64277fc45b0a6cef097f7f29c6619ef2e6953447f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599582c068c7177117ab7d64277fc45b0a6cef097f7f29c6619ef2e6953447f8->enter($__internal_599582c068c7177117ab7d64277fc45b0a6cef097f7f29c6619ef2e6953447f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d70803409ed87f676aa4feea2e2d0830404021ca4cd4011b675f4f5aaa55e8b5->leave($__internal_d70803409ed87f676aa4feea2e2d0830404021ca4cd4011b675f4f5aaa55e8b5_prof);

        
        $__internal_599582c068c7177117ab7d64277fc45b0a6cef097f7f29c6619ef2e6953447f8->leave($__internal_599582c068c7177117ab7d64277fc45b0a6cef097f7f29c6619ef2e6953447f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
