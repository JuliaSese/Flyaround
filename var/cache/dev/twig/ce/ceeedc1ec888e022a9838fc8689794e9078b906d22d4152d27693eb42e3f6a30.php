<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_60218f493f4f8184143e8495f73856916187e846f5861ac79fcf3e479bdf58f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60218f493f4f8184143e8495f73856916187e846f5861ac79fcf3e479bdf58f5->enter($__internal_60218f493f4f8184143e8495f73856916187e846f5861ac79fcf3e479bdf58f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e24c6b98101bcd6c80ca6de1373d41f652b37fa366debcbc877c9fe68380ca23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24c6b98101bcd6c80ca6de1373d41f652b37fa366debcbc877c9fe68380ca23->enter($__internal_e24c6b98101bcd6c80ca6de1373d41f652b37fa366debcbc877c9fe68380ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_60218f493f4f8184143e8495f73856916187e846f5861ac79fcf3e479bdf58f5->leave($__internal_60218f493f4f8184143e8495f73856916187e846f5861ac79fcf3e479bdf58f5_prof);

        
        $__internal_e24c6b98101bcd6c80ca6de1373d41f652b37fa366debcbc877c9fe68380ca23->leave($__internal_e24c6b98101bcd6c80ca6de1373d41f652b37fa366debcbc877c9fe68380ca23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
