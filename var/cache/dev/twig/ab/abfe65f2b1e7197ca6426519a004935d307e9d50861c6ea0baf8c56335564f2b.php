<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_5ba4c83bfa4ede82a7a94f977c73c0994018fda1815f489806ad2edff92a7c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba4c83bfa4ede82a7a94f977c73c0994018fda1815f489806ad2edff92a7c59->enter($__internal_5ba4c83bfa4ede82a7a94f977c73c0994018fda1815f489806ad2edff92a7c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_da40096dfab55625248674ec21a74f0ea909de6467ccb6b36991f3949ef726b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da40096dfab55625248674ec21a74f0ea909de6467ccb6b36991f3949ef726b5->enter($__internal_da40096dfab55625248674ec21a74f0ea909de6467ccb6b36991f3949ef726b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5ba4c83bfa4ede82a7a94f977c73c0994018fda1815f489806ad2edff92a7c59->leave($__internal_5ba4c83bfa4ede82a7a94f977c73c0994018fda1815f489806ad2edff92a7c59_prof);

        
        $__internal_da40096dfab55625248674ec21a74f0ea909de6467ccb6b36991f3949ef726b5->leave($__internal_da40096dfab55625248674ec21a74f0ea909de6467ccb6b36991f3949ef726b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
