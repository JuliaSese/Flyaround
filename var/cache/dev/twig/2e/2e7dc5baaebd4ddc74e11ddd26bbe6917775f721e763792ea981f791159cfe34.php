<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47d374e5c175091b9e0a968b9db54391558916c10ee60e9e5b30c7007bd925e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47d374e5c175091b9e0a968b9db54391558916c10ee60e9e5b30c7007bd925e->enter($__internal_b47d374e5c175091b9e0a968b9db54391558916c10ee60e9e5b30c7007bd925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_38f1ef1354a24538abe7761dce02adddb67bbd32d6d8e351875e92956d3dfd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f1ef1354a24538abe7761dce02adddb67bbd32d6d8e351875e92956d3dfd8e->enter($__internal_38f1ef1354a24538abe7761dce02adddb67bbd32d6d8e351875e92956d3dfd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b47d374e5c175091b9e0a968b9db54391558916c10ee60e9e5b30c7007bd925e->leave($__internal_b47d374e5c175091b9e0a968b9db54391558916c10ee60e9e5b30c7007bd925e_prof);

        
        $__internal_38f1ef1354a24538abe7761dce02adddb67bbd32d6d8e351875e92956d3dfd8e->leave($__internal_38f1ef1354a24538abe7761dce02adddb67bbd32d6d8e351875e92956d3dfd8e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f691248b11ef00490081e49b7de4a0cf25838ec82c7e8b3eb09cfb71e946e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f691248b11ef00490081e49b7de4a0cf25838ec82c7e8b3eb09cfb71e946e48->enter($__internal_5f691248b11ef00490081e49b7de4a0cf25838ec82c7e8b3eb09cfb71e946e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38318f3bebdcc1aaee00e38070139d4d8e317702d1503d92db23fe50c3195014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38318f3bebdcc1aaee00e38070139d4d8e317702d1503d92db23fe50c3195014->enter($__internal_38318f3bebdcc1aaee00e38070139d4d8e317702d1503d92db23fe50c3195014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_38318f3bebdcc1aaee00e38070139d4d8e317702d1503d92db23fe50c3195014->leave($__internal_38318f3bebdcc1aaee00e38070139d4d8e317702d1503d92db23fe50c3195014_prof);

        
        $__internal_5f691248b11ef00490081e49b7de4a0cf25838ec82c7e8b3eb09cfb71e946e48->leave($__internal_5f691248b11ef00490081e49b7de4a0cf25838ec82c7e8b3eb09cfb71e946e48_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
