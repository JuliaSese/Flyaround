<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_92514d1447d608eb2abcf7fcfd1bfdb9a9e46aca4d6403422328fb4e0a315d65 extends Twig_Template
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
        $__internal_6ad16ff4e553ab790ded5aa5203a1d8b2d2b3992a0c1ec5cb9dff94755730dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad16ff4e553ab790ded5aa5203a1d8b2d2b3992a0c1ec5cb9dff94755730dae->enter($__internal_6ad16ff4e553ab790ded5aa5203a1d8b2d2b3992a0c1ec5cb9dff94755730dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d99fbbfa4082596b90504b6755d89fdbb0ace129b53466e4ba8ca721a15cb289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99fbbfa4082596b90504b6755d89fdbb0ace129b53466e4ba8ca721a15cb289->enter($__internal_d99fbbfa4082596b90504b6755d89fdbb0ace129b53466e4ba8ca721a15cb289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6ad16ff4e553ab790ded5aa5203a1d8b2d2b3992a0c1ec5cb9dff94755730dae->leave($__internal_6ad16ff4e553ab790ded5aa5203a1d8b2d2b3992a0c1ec5cb9dff94755730dae_prof);

        
        $__internal_d99fbbfa4082596b90504b6755d89fdbb0ace129b53466e4ba8ca721a15cb289->leave($__internal_d99fbbfa4082596b90504b6755d89fdbb0ace129b53466e4ba8ca721a15cb289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
