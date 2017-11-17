<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_021a326a5b5b9a3572ab4056c2ae7abea3e36d05e0a52d9e667fd8d1131a7690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021a326a5b5b9a3572ab4056c2ae7abea3e36d05e0a52d9e667fd8d1131a7690->enter($__internal_021a326a5b5b9a3572ab4056c2ae7abea3e36d05e0a52d9e667fd8d1131a7690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c499be751ccc5a9942489d6c334faf991c3e87acc939b1275fc54d08bc3af1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c499be751ccc5a9942489d6c334faf991c3e87acc939b1275fc54d08bc3af1ca->enter($__internal_c499be751ccc5a9942489d6c334faf991c3e87acc939b1275fc54d08bc3af1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_021a326a5b5b9a3572ab4056c2ae7abea3e36d05e0a52d9e667fd8d1131a7690->leave($__internal_021a326a5b5b9a3572ab4056c2ae7abea3e36d05e0a52d9e667fd8d1131a7690_prof);

        
        $__internal_c499be751ccc5a9942489d6c334faf991c3e87acc939b1275fc54d08bc3af1ca->leave($__internal_c499be751ccc5a9942489d6c334faf991c3e87acc939b1275fc54d08bc3af1ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
