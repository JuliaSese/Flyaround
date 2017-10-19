<?php

/* base.html.twig */
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
        $__internal_88fef1e1fd57a2a3db0533f95abd0bc80b3b11d65c87d3da397f3e71f16ab4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fef1e1fd57a2a3db0533f95abd0bc80b3b11d65c87d3da397f3e71f16ab4e9->enter($__internal_88fef1e1fd57a2a3db0533f95abd0bc80b3b11d65c87d3da397f3e71f16ab4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_21a28430d576604b3e5db8c31803838a7121b4f0d86596a13015ecff5c95fc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a28430d576604b3e5db8c31803838a7121b4f0d86596a13015ecff5c95fc8a->enter($__internal_21a28430d576604b3e5db8c31803838a7121b4f0d86596a13015ecff5c95fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_88fef1e1fd57a2a3db0533f95abd0bc80b3b11d65c87d3da397f3e71f16ab4e9->leave($__internal_88fef1e1fd57a2a3db0533f95abd0bc80b3b11d65c87d3da397f3e71f16ab4e9_prof);

        
        $__internal_21a28430d576604b3e5db8c31803838a7121b4f0d86596a13015ecff5c95fc8a->leave($__internal_21a28430d576604b3e5db8c31803838a7121b4f0d86596a13015ecff5c95fc8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6b616aa0443b363468409a4030268f691c756bd7724b7c7664352cc205c1e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b616aa0443b363468409a4030268f691c756bd7724b7c7664352cc205c1e6a->enter($__internal_a6b616aa0443b363468409a4030268f691c756bd7724b7c7664352cc205c1e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_760ea550372d78b21bd63da3c6800a8036bf8b1ce1abb5c66ed97758f6ae0948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760ea550372d78b21bd63da3c6800a8036bf8b1ce1abb5c66ed97758f6ae0948->enter($__internal_760ea550372d78b21bd63da3c6800a8036bf8b1ce1abb5c66ed97758f6ae0948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_760ea550372d78b21bd63da3c6800a8036bf8b1ce1abb5c66ed97758f6ae0948->leave($__internal_760ea550372d78b21bd63da3c6800a8036bf8b1ce1abb5c66ed97758f6ae0948_prof);

        
        $__internal_a6b616aa0443b363468409a4030268f691c756bd7724b7c7664352cc205c1e6a->leave($__internal_a6b616aa0443b363468409a4030268f691c756bd7724b7c7664352cc205c1e6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa1bb89a65939447507640c984c8ba95928896636bfc8d0beea5679072a12ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1bb89a65939447507640c984c8ba95928896636bfc8d0beea5679072a12ec3->enter($__internal_fa1bb89a65939447507640c984c8ba95928896636bfc8d0beea5679072a12ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0df68245b3c0ef118868887c43f54dc931bcd61a96a9c84488821e7466bee5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df68245b3c0ef118868887c43f54dc931bcd61a96a9c84488821e7466bee5a9->enter($__internal_0df68245b3c0ef118868887c43f54dc931bcd61a96a9c84488821e7466bee5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0df68245b3c0ef118868887c43f54dc931bcd61a96a9c84488821e7466bee5a9->leave($__internal_0df68245b3c0ef118868887c43f54dc931bcd61a96a9c84488821e7466bee5a9_prof);

        
        $__internal_fa1bb89a65939447507640c984c8ba95928896636bfc8d0beea5679072a12ec3->leave($__internal_fa1bb89a65939447507640c984c8ba95928896636bfc8d0beea5679072a12ec3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_140a76e5b33d612285f62af1504b1faa8b0bcf8f6653acc9d342659c588abcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140a76e5b33d612285f62af1504b1faa8b0bcf8f6653acc9d342659c588abcb0->enter($__internal_140a76e5b33d612285f62af1504b1faa8b0bcf8f6653acc9d342659c588abcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41edcd202cf2d456bacf95fda0377ea95d982e38f387738cdca48cf52dd6a4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41edcd202cf2d456bacf95fda0377ea95d982e38f387738cdca48cf52dd6a4c9->enter($__internal_41edcd202cf2d456bacf95fda0377ea95d982e38f387738cdca48cf52dd6a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41edcd202cf2d456bacf95fda0377ea95d982e38f387738cdca48cf52dd6a4c9->leave($__internal_41edcd202cf2d456bacf95fda0377ea95d982e38f387738cdca48cf52dd6a4c9_prof);

        
        $__internal_140a76e5b33d612285f62af1504b1faa8b0bcf8f6653acc9d342659c588abcb0->leave($__internal_140a76e5b33d612285f62af1504b1faa8b0bcf8f6653acc9d342659c588abcb0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32db0acbe4ca5733adaf1f90e859417fd906ecaf5c8f01f207845f7ac34b95a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32db0acbe4ca5733adaf1f90e859417fd906ecaf5c8f01f207845f7ac34b95a4->enter($__internal_32db0acbe4ca5733adaf1f90e859417fd906ecaf5c8f01f207845f7ac34b95a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d90d8f4fb74729d9648ec290d4ffcbd7983d2d09bb3c296d201a04d6781e81de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90d8f4fb74729d9648ec290d4ffcbd7983d2d09bb3c296d201a04d6781e81de->enter($__internal_d90d8f4fb74729d9648ec290d4ffcbd7983d2d09bb3c296d201a04d6781e81de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d90d8f4fb74729d9648ec290d4ffcbd7983d2d09bb3c296d201a04d6781e81de->leave($__internal_d90d8f4fb74729d9648ec290d4ffcbd7983d2d09bb3c296d201a04d6781e81de_prof);

        
        $__internal_32db0acbe4ca5733adaf1f90e859417fd906ecaf5c8f01f207845f7ac34b95a4->leave($__internal_32db0acbe4ca5733adaf1f90e859417fd906ecaf5c8f01f207845f7ac34b95a4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/var/www/html/flyaround/app/Resources/views/base.html.twig");
    }
}
