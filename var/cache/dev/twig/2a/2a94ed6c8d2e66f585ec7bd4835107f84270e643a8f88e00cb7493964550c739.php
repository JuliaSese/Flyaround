<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_43e58ce4dcd175f229ceb63647dd31a2616c9383fde0432bf5c0c1037b317c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e58ce4dcd175f229ceb63647dd31a2616c9383fde0432bf5c0c1037b317c20->enter($__internal_43e58ce4dcd175f229ceb63647dd31a2616c9383fde0432bf5c0c1037b317c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f6d3d6f7bb157fc163bef66df1b41317e4734b32fee869d5d760f2e3bf1c6768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d3d6f7bb157fc163bef66df1b41317e4734b32fee869d5d760f2e3bf1c6768->enter($__internal_f6d3d6f7bb157fc163bef66df1b41317e4734b32fee869d5d760f2e3bf1c6768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_43e58ce4dcd175f229ceb63647dd31a2616c9383fde0432bf5c0c1037b317c20->leave($__internal_43e58ce4dcd175f229ceb63647dd31a2616c9383fde0432bf5c0c1037b317c20_prof);

        
        $__internal_f6d3d6f7bb157fc163bef66df1b41317e4734b32fee869d5d760f2e3bf1c6768->leave($__internal_f6d3d6f7bb157fc163bef66df1b41317e4734b32fee869d5d760f2e3bf1c6768_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
