<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6a73981c1dfc36ebd2879f0f0f120d03219f13e7305867de63e6c1eeb358794e extends Twig_Template
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
        $__internal_fa8f7cad0b9df47a24c51bada49ec86bc54dc96f13101307d94d808ef8d94fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8f7cad0b9df47a24c51bada49ec86bc54dc96f13101307d94d808ef8d94fe7->enter($__internal_fa8f7cad0b9df47a24c51bada49ec86bc54dc96f13101307d94d808ef8d94fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d4d0a127cbd3c07b26bfd56d4f2d1060dee432f6280410d122adc44e0e04d95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d0a127cbd3c07b26bfd56d4f2d1060dee432f6280410d122adc44e0e04d95a->enter($__internal_d4d0a127cbd3c07b26bfd56d4f2d1060dee432f6280410d122adc44e0e04d95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_fa8f7cad0b9df47a24c51bada49ec86bc54dc96f13101307d94d808ef8d94fe7->leave($__internal_fa8f7cad0b9df47a24c51bada49ec86bc54dc96f13101307d94d808ef8d94fe7_prof);

        
        $__internal_d4d0a127cbd3c07b26bfd56d4f2d1060dee432f6280410d122adc44e0e04d95a->leave($__internal_d4d0a127cbd3c07b26bfd56d4f2d1060dee432f6280410d122adc44e0e04d95a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
