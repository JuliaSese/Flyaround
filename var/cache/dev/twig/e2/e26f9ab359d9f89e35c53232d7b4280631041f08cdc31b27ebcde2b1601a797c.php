<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_a4640cc330e0633baa42a77dd7eec06e2299de4ff680f290add2f3aada295e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4640cc330e0633baa42a77dd7eec06e2299de4ff680f290add2f3aada295e1d->enter($__internal_a4640cc330e0633baa42a77dd7eec06e2299de4ff680f290add2f3aada295e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cf217aae540bcdb0b616db33f5efb5c8b572f2b6a78753eae37f9a984a5fc0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf217aae540bcdb0b616db33f5efb5c8b572f2b6a78753eae37f9a984a5fc0af->enter($__internal_cf217aae540bcdb0b616db33f5efb5c8b572f2b6a78753eae37f9a984a5fc0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a4640cc330e0633baa42a77dd7eec06e2299de4ff680f290add2f3aada295e1d->leave($__internal_a4640cc330e0633baa42a77dd7eec06e2299de4ff680f290add2f3aada295e1d_prof);

        
        $__internal_cf217aae540bcdb0b616db33f5efb5c8b572f2b6a78753eae37f9a984a5fc0af->leave($__internal_cf217aae540bcdb0b616db33f5efb5c8b572f2b6a78753eae37f9a984a5fc0af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
