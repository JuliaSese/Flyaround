<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_a4b1ef9e84ee3c13908fef28ce7e0ec4a39fff1da5076751062a490a1ad1d01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b1ef9e84ee3c13908fef28ce7e0ec4a39fff1da5076751062a490a1ad1d01f->enter($__internal_a4b1ef9e84ee3c13908fef28ce7e0ec4a39fff1da5076751062a490a1ad1d01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_36806cf0bbdff56d266a89c09f3a8d12cf67d47ab613b5f70ef697520081953e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36806cf0bbdff56d266a89c09f3a8d12cf67d47ab613b5f70ef697520081953e->enter($__internal_36806cf0bbdff56d266a89c09f3a8d12cf67d47ab613b5f70ef697520081953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a4b1ef9e84ee3c13908fef28ce7e0ec4a39fff1da5076751062a490a1ad1d01f->leave($__internal_a4b1ef9e84ee3c13908fef28ce7e0ec4a39fff1da5076751062a490a1ad1d01f_prof);

        
        $__internal_36806cf0bbdff56d266a89c09f3a8d12cf67d47ab613b5f70ef697520081953e->leave($__internal_36806cf0bbdff56d266a89c09f3a8d12cf67d47ab613b5f70ef697520081953e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
