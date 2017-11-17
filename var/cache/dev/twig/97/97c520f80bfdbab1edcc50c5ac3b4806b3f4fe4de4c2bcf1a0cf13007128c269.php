<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_964d048ad7d824e917408b6b3581403a9aa19ce8322beba65cf6e1fbefe8a344 extends Twig_Template
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
        $__internal_c18951b0080b87e6c46b2adf7d2efb36b2a92f0f9291bb59c6d8aa823d9c9728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18951b0080b87e6c46b2adf7d2efb36b2a92f0f9291bb59c6d8aa823d9c9728->enter($__internal_c18951b0080b87e6c46b2adf7d2efb36b2a92f0f9291bb59c6d8aa823d9c9728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fb1061326c26a532e8bd09b2363e0633b33c2a942b13bd6c202e4051cd83a04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1061326c26a532e8bd09b2363e0633b33c2a942b13bd6c202e4051cd83a04c->enter($__internal_fb1061326c26a532e8bd09b2363e0633b33c2a942b13bd6c202e4051cd83a04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c18951b0080b87e6c46b2adf7d2efb36b2a92f0f9291bb59c6d8aa823d9c9728->leave($__internal_c18951b0080b87e6c46b2adf7d2efb36b2a92f0f9291bb59c6d8aa823d9c9728_prof);

        
        $__internal_fb1061326c26a532e8bd09b2363e0633b33c2a942b13bd6c202e4051cd83a04c->leave($__internal_fb1061326c26a532e8bd09b2363e0633b33c2a942b13bd6c202e4051cd83a04c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
