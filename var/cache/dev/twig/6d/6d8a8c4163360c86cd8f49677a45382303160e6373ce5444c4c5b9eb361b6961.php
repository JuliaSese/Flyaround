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
        $__internal_4bf822d5e48e86e696e95897727e52c1868271e15c12ca1b81e55769ac2b1570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf822d5e48e86e696e95897727e52c1868271e15c12ca1b81e55769ac2b1570->enter($__internal_4bf822d5e48e86e696e95897727e52c1868271e15c12ca1b81e55769ac2b1570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4be5ef991eaae2f5ae1017da0bd159939376ff225c3d91b8a3374393333fd0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be5ef991eaae2f5ae1017da0bd159939376ff225c3d91b8a3374393333fd0a1->enter($__internal_4be5ef991eaae2f5ae1017da0bd159939376ff225c3d91b8a3374393333fd0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4bf822d5e48e86e696e95897727e52c1868271e15c12ca1b81e55769ac2b1570->leave($__internal_4bf822d5e48e86e696e95897727e52c1868271e15c12ca1b81e55769ac2b1570_prof);

        
        $__internal_4be5ef991eaae2f5ae1017da0bd159939376ff225c3d91b8a3374393333fd0a1->leave($__internal_4be5ef991eaae2f5ae1017da0bd159939376ff225c3d91b8a3374393333fd0a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9efb658d462bdd4a91f90334c732955da225fb2d610bb2dabaae7e4489d3c7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efb658d462bdd4a91f90334c732955da225fb2d610bb2dabaae7e4489d3c7cc->enter($__internal_9efb658d462bdd4a91f90334c732955da225fb2d610bb2dabaae7e4489d3c7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1296bb2de4542f03fffd637fdfe79c04577d7d147a9290f502c2496aaaf74f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1296bb2de4542f03fffd637fdfe79c04577d7d147a9290f502c2496aaaf74f89->enter($__internal_1296bb2de4542f03fffd637fdfe79c04577d7d147a9290f502c2496aaaf74f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1296bb2de4542f03fffd637fdfe79c04577d7d147a9290f502c2496aaaf74f89->leave($__internal_1296bb2de4542f03fffd637fdfe79c04577d7d147a9290f502c2496aaaf74f89_prof);

        
        $__internal_9efb658d462bdd4a91f90334c732955da225fb2d610bb2dabaae7e4489d3c7cc->leave($__internal_9efb658d462bdd4a91f90334c732955da225fb2d610bb2dabaae7e4489d3c7cc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_424e5d7ec1cb0b75504170f92057c18d777d3dd61ae97ff8cde19992d8cce984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424e5d7ec1cb0b75504170f92057c18d777d3dd61ae97ff8cde19992d8cce984->enter($__internal_424e5d7ec1cb0b75504170f92057c18d777d3dd61ae97ff8cde19992d8cce984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac3b761de42953c16d33f03546aa5ec81723fd19820c07e724b2d9a782b88199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3b761de42953c16d33f03546aa5ec81723fd19820c07e724b2d9a782b88199->enter($__internal_ac3b761de42953c16d33f03546aa5ec81723fd19820c07e724b2d9a782b88199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac3b761de42953c16d33f03546aa5ec81723fd19820c07e724b2d9a782b88199->leave($__internal_ac3b761de42953c16d33f03546aa5ec81723fd19820c07e724b2d9a782b88199_prof);

        
        $__internal_424e5d7ec1cb0b75504170f92057c18d777d3dd61ae97ff8cde19992d8cce984->leave($__internal_424e5d7ec1cb0b75504170f92057c18d777d3dd61ae97ff8cde19992d8cce984_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab42fa03b648c95cc13a8fc03979f6492f768910a4b93599fe0192011981a0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab42fa03b648c95cc13a8fc03979f6492f768910a4b93599fe0192011981a0d0->enter($__internal_ab42fa03b648c95cc13a8fc03979f6492f768910a4b93599fe0192011981a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_347c458ad7ca2e6e036d7a4ac6fd1d6d8da0ccdfc6f27b3497e999862a4f32c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347c458ad7ca2e6e036d7a4ac6fd1d6d8da0ccdfc6f27b3497e999862a4f32c5->enter($__internal_347c458ad7ca2e6e036d7a4ac6fd1d6d8da0ccdfc6f27b3497e999862a4f32c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_347c458ad7ca2e6e036d7a4ac6fd1d6d8da0ccdfc6f27b3497e999862a4f32c5->leave($__internal_347c458ad7ca2e6e036d7a4ac6fd1d6d8da0ccdfc6f27b3497e999862a4f32c5_prof);

        
        $__internal_ab42fa03b648c95cc13a8fc03979f6492f768910a4b93599fe0192011981a0d0->leave($__internal_ab42fa03b648c95cc13a8fc03979f6492f768910a4b93599fe0192011981a0d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_082c0fc6fa34de1c8a128025fb432aa7701891baae67b3364023f785316c67bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082c0fc6fa34de1c8a128025fb432aa7701891baae67b3364023f785316c67bb->enter($__internal_082c0fc6fa34de1c8a128025fb432aa7701891baae67b3364023f785316c67bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b6e0d8f453d46a99cd0e281515331df88e0a56efe7e2ffb2b478a3e5773aed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e0d8f453d46a99cd0e281515331df88e0a56efe7e2ffb2b478a3e5773aed5a->enter($__internal_b6e0d8f453d46a99cd0e281515331df88e0a56efe7e2ffb2b478a3e5773aed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b6e0d8f453d46a99cd0e281515331df88e0a56efe7e2ffb2b478a3e5773aed5a->leave($__internal_b6e0d8f453d46a99cd0e281515331df88e0a56efe7e2ffb2b478a3e5773aed5a_prof);

        
        $__internal_082c0fc6fa34de1c8a128025fb432aa7701891baae67b3364023f785316c67bb->leave($__internal_082c0fc6fa34de1c8a128025fb432aa7701891baae67b3364023f785316c67bb_prof);

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
