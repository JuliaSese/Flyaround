<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_1b027848475c97bcbf9abcb45caf628dcc120dae732ac9cb1ddb765280252fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b027848475c97bcbf9abcb45caf628dcc120dae732ac9cb1ddb765280252fc2->enter($__internal_1b027848475c97bcbf9abcb45caf628dcc120dae732ac9cb1ddb765280252fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7200803e240a9a73e67a813c9d026a905c7be573b0efb734d434d0d58b914e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7200803e240a9a73e67a813c9d026a905c7be573b0efb734d434d0d58b914e7d->enter($__internal_7200803e240a9a73e67a813c9d026a905c7be573b0efb734d434d0d58b914e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1b027848475c97bcbf9abcb45caf628dcc120dae732ac9cb1ddb765280252fc2->leave($__internal_1b027848475c97bcbf9abcb45caf628dcc120dae732ac9cb1ddb765280252fc2_prof);

        
        $__internal_7200803e240a9a73e67a813c9d026a905c7be573b0efb734d434d0d58b914e7d->leave($__internal_7200803e240a9a73e67a813c9d026a905c7be573b0efb734d434d0d58b914e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
