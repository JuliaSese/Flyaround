<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_525d4b10328450d2a345d46534f9be77d7a66adb99611fd96ce6c039abef6d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525d4b10328450d2a345d46534f9be77d7a66adb99611fd96ce6c039abef6d85->enter($__internal_525d4b10328450d2a345d46534f9be77d7a66adb99611fd96ce6c039abef6d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8f9ec4be8138cae7ea2d92fe4ce9650fb4f07188e97506a35d70221250dee9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9ec4be8138cae7ea2d92fe4ce9650fb4f07188e97506a35d70221250dee9ef->enter($__internal_8f9ec4be8138cae7ea2d92fe4ce9650fb4f07188e97506a35d70221250dee9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_525d4b10328450d2a345d46534f9be77d7a66adb99611fd96ce6c039abef6d85->leave($__internal_525d4b10328450d2a345d46534f9be77d7a66adb99611fd96ce6c039abef6d85_prof);

        
        $__internal_8f9ec4be8138cae7ea2d92fe4ce9650fb4f07188e97506a35d70221250dee9ef->leave($__internal_8f9ec4be8138cae7ea2d92fe4ce9650fb4f07188e97506a35d70221250dee9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
