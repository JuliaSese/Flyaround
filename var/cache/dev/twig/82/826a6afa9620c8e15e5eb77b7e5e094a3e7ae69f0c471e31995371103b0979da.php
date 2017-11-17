<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_7eda43423a715f0d467f920cf0ccc4c6d042f56a80fbe5341e98fe04560ca875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eda43423a715f0d467f920cf0ccc4c6d042f56a80fbe5341e98fe04560ca875->enter($__internal_7eda43423a715f0d467f920cf0ccc4c6d042f56a80fbe5341e98fe04560ca875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c7d905ea5b144e9d0b94f536cb7f2587b862523a9a06d448a64ea17faec907a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d905ea5b144e9d0b94f536cb7f2587b862523a9a06d448a64ea17faec907a2->enter($__internal_c7d905ea5b144e9d0b94f536cb7f2587b862523a9a06d448a64ea17faec907a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7eda43423a715f0d467f920cf0ccc4c6d042f56a80fbe5341e98fe04560ca875->leave($__internal_7eda43423a715f0d467f920cf0ccc4c6d042f56a80fbe5341e98fe04560ca875_prof);

        
        $__internal_c7d905ea5b144e9d0b94f536cb7f2587b862523a9a06d448a64ea17faec907a2->leave($__internal_c7d905ea5b144e9d0b94f536cb7f2587b862523a9a06d448a64ea17faec907a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
