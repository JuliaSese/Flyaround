<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_dd88e63ea12ee2c42e77bfeac4179942bb18dce3af997f79b773ea7ea553e3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd88e63ea12ee2c42e77bfeac4179942bb18dce3af997f79b773ea7ea553e3fb->enter($__internal_dd88e63ea12ee2c42e77bfeac4179942bb18dce3af997f79b773ea7ea553e3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7fe55595403eefff8a1ce70953ebacb68dc20ea77b5dc0300a6bc192a0ad5449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe55595403eefff8a1ce70953ebacb68dc20ea77b5dc0300a6bc192a0ad5449->enter($__internal_7fe55595403eefff8a1ce70953ebacb68dc20ea77b5dc0300a6bc192a0ad5449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dd88e63ea12ee2c42e77bfeac4179942bb18dce3af997f79b773ea7ea553e3fb->leave($__internal_dd88e63ea12ee2c42e77bfeac4179942bb18dce3af997f79b773ea7ea553e3fb_prof);

        
        $__internal_7fe55595403eefff8a1ce70953ebacb68dc20ea77b5dc0300a6bc192a0ad5449->leave($__internal_7fe55595403eefff8a1ce70953ebacb68dc20ea77b5dc0300a6bc192a0ad5449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
