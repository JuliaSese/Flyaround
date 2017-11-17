<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_5d317367142e59f49f1cb424bf0a89027ad7505aa6562d5c65562911b6f03410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d317367142e59f49f1cb424bf0a89027ad7505aa6562d5c65562911b6f03410->enter($__internal_5d317367142e59f49f1cb424bf0a89027ad7505aa6562d5c65562911b6f03410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3e9e1bfd96408993b6fdaf416c16de19fd8fff32e4f65ec715da3da8d057a8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9e1bfd96408993b6fdaf416c16de19fd8fff32e4f65ec715da3da8d057a8a0->enter($__internal_3e9e1bfd96408993b6fdaf416c16de19fd8fff32e4f65ec715da3da8d057a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5d317367142e59f49f1cb424bf0a89027ad7505aa6562d5c65562911b6f03410->leave($__internal_5d317367142e59f49f1cb424bf0a89027ad7505aa6562d5c65562911b6f03410_prof);

        
        $__internal_3e9e1bfd96408993b6fdaf416c16de19fd8fff32e4f65ec715da3da8d057a8a0->leave($__internal_3e9e1bfd96408993b6fdaf416c16de19fd8fff32e4f65ec715da3da8d057a8a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
