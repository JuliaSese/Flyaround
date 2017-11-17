<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_57a77df7e7c79a89a3cbd49a03940414a35e9f3f586533bd4e527bb2b3e34da4 extends Twig_Template
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
        $__internal_5ddbb61bf7b9b7418a81ef2bf1ad70c0f7da55e4a2576c0a5be69477d010790c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddbb61bf7b9b7418a81ef2bf1ad70c0f7da55e4a2576c0a5be69477d010790c->enter($__internal_5ddbb61bf7b9b7418a81ef2bf1ad70c0f7da55e4a2576c0a5be69477d010790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1541821e914b8529ed5e603d1acd9ad40e0e5f5929760fe2dab9c49e387b3ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1541821e914b8529ed5e603d1acd9ad40e0e5f5929760fe2dab9c49e387b3ff5->enter($__internal_1541821e914b8529ed5e603d1acd9ad40e0e5f5929760fe2dab9c49e387b3ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5ddbb61bf7b9b7418a81ef2bf1ad70c0f7da55e4a2576c0a5be69477d010790c->leave($__internal_5ddbb61bf7b9b7418a81ef2bf1ad70c0f7da55e4a2576c0a5be69477d010790c_prof);

        
        $__internal_1541821e914b8529ed5e603d1acd9ad40e0e5f5929760fe2dab9c49e387b3ff5->leave($__internal_1541821e914b8529ed5e603d1acd9ad40e0e5f5929760fe2dab9c49e387b3ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
