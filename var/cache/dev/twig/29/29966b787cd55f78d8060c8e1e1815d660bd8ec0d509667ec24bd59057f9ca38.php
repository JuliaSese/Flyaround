<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_e7028f5d30d0b5b6cde5caaf608e20b32f3ac312eac3208820ff072d898dadda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7028f5d30d0b5b6cde5caaf608e20b32f3ac312eac3208820ff072d898dadda->enter($__internal_e7028f5d30d0b5b6cde5caaf608e20b32f3ac312eac3208820ff072d898dadda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6850f6e90978cbc1989b62f9a2a73366c280f46cc8c7ee5034a0198f9df2b443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6850f6e90978cbc1989b62f9a2a73366c280f46cc8c7ee5034a0198f9df2b443->enter($__internal_6850f6e90978cbc1989b62f9a2a73366c280f46cc8c7ee5034a0198f9df2b443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e7028f5d30d0b5b6cde5caaf608e20b32f3ac312eac3208820ff072d898dadda->leave($__internal_e7028f5d30d0b5b6cde5caaf608e20b32f3ac312eac3208820ff072d898dadda_prof);

        
        $__internal_6850f6e90978cbc1989b62f9a2a73366c280f46cc8c7ee5034a0198f9df2b443->leave($__internal_6850f6e90978cbc1989b62f9a2a73366c280f46cc8c7ee5034a0198f9df2b443_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
