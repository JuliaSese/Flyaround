<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_615d3a237eecc9e4c98dbc3bf79fdaefa840b5b78e567b3f69c7ace8d6550fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615d3a237eecc9e4c98dbc3bf79fdaefa840b5b78e567b3f69c7ace8d6550fc5->enter($__internal_615d3a237eecc9e4c98dbc3bf79fdaefa840b5b78e567b3f69c7ace8d6550fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1c0046aca4966343590dd125156ae0a24ac1a17c0f57c7f72ac23a3d5b0a707e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0046aca4966343590dd125156ae0a24ac1a17c0f57c7f72ac23a3d5b0a707e->enter($__internal_1c0046aca4966343590dd125156ae0a24ac1a17c0f57c7f72ac23a3d5b0a707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_615d3a237eecc9e4c98dbc3bf79fdaefa840b5b78e567b3f69c7ace8d6550fc5->leave($__internal_615d3a237eecc9e4c98dbc3bf79fdaefa840b5b78e567b3f69c7ace8d6550fc5_prof);

        
        $__internal_1c0046aca4966343590dd125156ae0a24ac1a17c0f57c7f72ac23a3d5b0a707e->leave($__internal_1c0046aca4966343590dd125156ae0a24ac1a17c0f57c7f72ac23a3d5b0a707e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b827cae069b9a3b79eba530ba35a91d18a4b65d663658f6f0a314b76c4a1bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b827cae069b9a3b79eba530ba35a91d18a4b65d663658f6f0a314b76c4a1bad->enter($__internal_7b827cae069b9a3b79eba530ba35a91d18a4b65d663658f6f0a314b76c4a1bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b23c57711a612e371f7938ae93c75fc84a275f25a2675c8a012ba0338913f368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23c57711a612e371f7938ae93c75fc84a275f25a2675c8a012ba0338913f368->enter($__internal_b23c57711a612e371f7938ae93c75fc84a275f25a2675c8a012ba0338913f368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b23c57711a612e371f7938ae93c75fc84a275f25a2675c8a012ba0338913f368->leave($__internal_b23c57711a612e371f7938ae93c75fc84a275f25a2675c8a012ba0338913f368_prof);

        
        $__internal_7b827cae069b9a3b79eba530ba35a91d18a4b65d663658f6f0a314b76c4a1bad->leave($__internal_7b827cae069b9a3b79eba530ba35a91d18a4b65d663658f6f0a314b76c4a1bad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e93db3294df1d1ff065d6add653a794a7d67514d928c32ac693dae8cfecd3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e93db3294df1d1ff065d6add653a794a7d67514d928c32ac693dae8cfecd3f0->enter($__internal_8e93db3294df1d1ff065d6add653a794a7d67514d928c32ac693dae8cfecd3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4ad0dc0ea861e439aceea1e2836fbe5e806c706d30304eb684392d750276466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ad0dc0ea861e439aceea1e2836fbe5e806c706d30304eb684392d750276466->enter($__internal_a4ad0dc0ea861e439aceea1e2836fbe5e806c706d30304eb684392d750276466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4ad0dc0ea861e439aceea1e2836fbe5e806c706d30304eb684392d750276466->leave($__internal_a4ad0dc0ea861e439aceea1e2836fbe5e806c706d30304eb684392d750276466_prof);

        
        $__internal_8e93db3294df1d1ff065d6add653a794a7d67514d928c32ac693dae8cfecd3f0->leave($__internal_8e93db3294df1d1ff065d6add653a794a7d67514d928c32ac693dae8cfecd3f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f29e3c0b5c91b8724383a84900d19e070edf69e3a3c84db914297948f053d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f29e3c0b5c91b8724383a84900d19e070edf69e3a3c84db914297948f053d59->enter($__internal_2f29e3c0b5c91b8724383a84900d19e070edf69e3a3c84db914297948f053d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81d7f928c59cc28f567a3199cc54a15d9c68f6d79b95433abeb4aa4486e216de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d7f928c59cc28f567a3199cc54a15d9c68f6d79b95433abeb4aa4486e216de->enter($__internal_81d7f928c59cc28f567a3199cc54a15d9c68f6d79b95433abeb4aa4486e216de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81d7f928c59cc28f567a3199cc54a15d9c68f6d79b95433abeb4aa4486e216de->leave($__internal_81d7f928c59cc28f567a3199cc54a15d9c68f6d79b95433abeb4aa4486e216de_prof);

        
        $__internal_2f29e3c0b5c91b8724383a84900d19e070edf69e3a3c84db914297948f053d59->leave($__internal_2f29e3c0b5c91b8724383a84900d19e070edf69e3a3c84db914297948f053d59_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14817c9eb384bdcce10fb3b2508983e8c86e011c666bdf695d25b4041c79272f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14817c9eb384bdcce10fb3b2508983e8c86e011c666bdf695d25b4041c79272f->enter($__internal_14817c9eb384bdcce10fb3b2508983e8c86e011c666bdf695d25b4041c79272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c56c118af508ca523e67d8bd34e172a0e5d1f722d569d89224c99d220c74d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c56c118af508ca523e67d8bd34e172a0e5d1f722d569d89224c99d220c74d32->enter($__internal_2c56c118af508ca523e67d8bd34e172a0e5d1f722d569d89224c99d220c74d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c56c118af508ca523e67d8bd34e172a0e5d1f722d569d89224c99d220c74d32->leave($__internal_2c56c118af508ca523e67d8bd34e172a0e5d1f722d569d89224c99d220c74d32_prof);

        
        $__internal_14817c9eb384bdcce10fb3b2508983e8c86e011c666bdf695d25b4041c79272f->leave($__internal_14817c9eb384bdcce10fb3b2508983e8c86e011c666bdf695d25b4041c79272f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/flyaround/app/Resources/views/base.html.twig");
    }
}
