<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_73c3b6867586ac743483a2df73c15905522b4c0a6df1857793d70a59adf28b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c3b6867586ac743483a2df73c15905522b4c0a6df1857793d70a59adf28b99->enter($__internal_73c3b6867586ac743483a2df73c15905522b4c0a6df1857793d70a59adf28b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f9d9bcbdca33fee668a9bffc0a251547bbed17d045ffba1a20d590a137eb04f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d9bcbdca33fee668a9bffc0a251547bbed17d045ffba1a20d590a137eb04f4->enter($__internal_f9d9bcbdca33fee668a9bffc0a251547bbed17d045ffba1a20d590a137eb04f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_73c3b6867586ac743483a2df73c15905522b4c0a6df1857793d70a59adf28b99->leave($__internal_73c3b6867586ac743483a2df73c15905522b4c0a6df1857793d70a59adf28b99_prof);

        
        $__internal_f9d9bcbdca33fee668a9bffc0a251547bbed17d045ffba1a20d590a137eb04f4->leave($__internal_f9d9bcbdca33fee668a9bffc0a251547bbed17d045ffba1a20d590a137eb04f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
