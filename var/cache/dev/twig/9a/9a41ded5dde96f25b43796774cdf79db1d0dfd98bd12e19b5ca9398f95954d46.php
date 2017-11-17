<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_de50a482b02d7c6b701b22af2d87758494ff77f259f860bf47b2008e06c6546d extends Twig_Template
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
        $__internal_736a5d323250cf7ffb4c2c924dc6f802f63fcab926f954296ea417f5e1ccdfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736a5d323250cf7ffb4c2c924dc6f802f63fcab926f954296ea417f5e1ccdfc1->enter($__internal_736a5d323250cf7ffb4c2c924dc6f802f63fcab926f954296ea417f5e1ccdfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8356f51b1b1698e2411b0e11193e5a28c98c98ca226ad8f1dc69b11d1832d9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8356f51b1b1698e2411b0e11193e5a28c98c98ca226ad8f1dc69b11d1832d9bf->enter($__internal_8356f51b1b1698e2411b0e11193e5a28c98c98ca226ad8f1dc69b11d1832d9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_736a5d323250cf7ffb4c2c924dc6f802f63fcab926f954296ea417f5e1ccdfc1->leave($__internal_736a5d323250cf7ffb4c2c924dc6f802f63fcab926f954296ea417f5e1ccdfc1_prof);

        
        $__internal_8356f51b1b1698e2411b0e11193e5a28c98c98ca226ad8f1dc69b11d1832d9bf->leave($__internal_8356f51b1b1698e2411b0e11193e5a28c98c98ca226ad8f1dc69b11d1832d9bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
