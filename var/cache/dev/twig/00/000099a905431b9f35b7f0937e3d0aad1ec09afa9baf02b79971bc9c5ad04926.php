<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_93734776d2a6743d0b9d5c32599bf03e3b68de517c8dba0e09c743b8fad7d481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93734776d2a6743d0b9d5c32599bf03e3b68de517c8dba0e09c743b8fad7d481->enter($__internal_93734776d2a6743d0b9d5c32599bf03e3b68de517c8dba0e09c743b8fad7d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4cd084ebad1c296534745e7315af247a8f6aa59b44f493d603921e8bd9927c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd084ebad1c296534745e7315af247a8f6aa59b44f493d603921e8bd9927c39->enter($__internal_4cd084ebad1c296534745e7315af247a8f6aa59b44f493d603921e8bd9927c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_93734776d2a6743d0b9d5c32599bf03e3b68de517c8dba0e09c743b8fad7d481->leave($__internal_93734776d2a6743d0b9d5c32599bf03e3b68de517c8dba0e09c743b8fad7d481_prof);

        
        $__internal_4cd084ebad1c296534745e7315af247a8f6aa59b44f493d603921e8bd9927c39->leave($__internal_4cd084ebad1c296534745e7315af247a8f6aa59b44f493d603921e8bd9927c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
