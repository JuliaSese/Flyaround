<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92e1d04fe10c0fcaeb1a952739335f890f243b83956c6cfd6ae4dc0b3ca347d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e1d04fe10c0fcaeb1a952739335f890f243b83956c6cfd6ae4dc0b3ca347d0->enter($__internal_92e1d04fe10c0fcaeb1a952739335f890f243b83956c6cfd6ae4dc0b3ca347d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fc3416074a2dafb62f8cefdbcf516211506fbaaea96579454bd6e9a983df35d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3416074a2dafb62f8cefdbcf516211506fbaaea96579454bd6e9a983df35d6->enter($__internal_fc3416074a2dafb62f8cefdbcf516211506fbaaea96579454bd6e9a983df35d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92e1d04fe10c0fcaeb1a952739335f890f243b83956c6cfd6ae4dc0b3ca347d0->leave($__internal_92e1d04fe10c0fcaeb1a952739335f890f243b83956c6cfd6ae4dc0b3ca347d0_prof);

        
        $__internal_fc3416074a2dafb62f8cefdbcf516211506fbaaea96579454bd6e9a983df35d6->leave($__internal_fc3416074a2dafb62f8cefdbcf516211506fbaaea96579454bd6e9a983df35d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94b1753b5d6dcf941a02aba0e9377b7e765195a39458151613fb21de133ed69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b1753b5d6dcf941a02aba0e9377b7e765195a39458151613fb21de133ed69b->enter($__internal_94b1753b5d6dcf941a02aba0e9377b7e765195a39458151613fb21de133ed69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f043ee2e3228207cc1c0e390cca186ca92d7119788d76a622732e8585efd751f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f043ee2e3228207cc1c0e390cca186ca92d7119788d76a622732e8585efd751f->enter($__internal_f043ee2e3228207cc1c0e390cca186ca92d7119788d76a622732e8585efd751f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f043ee2e3228207cc1c0e390cca186ca92d7119788d76a622732e8585efd751f->leave($__internal_f043ee2e3228207cc1c0e390cca186ca92d7119788d76a622732e8585efd751f_prof);

        
        $__internal_94b1753b5d6dcf941a02aba0e9377b7e765195a39458151613fb21de133ed69b->leave($__internal_94b1753b5d6dcf941a02aba0e9377b7e765195a39458151613fb21de133ed69b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_516039d707e26f1e5197e9a0e69fb0450f7c7f8bfe2df96dd282e45ddd131afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516039d707e26f1e5197e9a0e69fb0450f7c7f8bfe2df96dd282e45ddd131afd->enter($__internal_516039d707e26f1e5197e9a0e69fb0450f7c7f8bfe2df96dd282e45ddd131afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8b8f2eacac19a22d5e7cf4a15f45f91fb36ac8206ff76e04acff243aa1432ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b8f2eacac19a22d5e7cf4a15f45f91fb36ac8206ff76e04acff243aa1432ff->enter($__internal_b8b8f2eacac19a22d5e7cf4a15f45f91fb36ac8206ff76e04acff243aa1432ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b8b8f2eacac19a22d5e7cf4a15f45f91fb36ac8206ff76e04acff243aa1432ff->leave($__internal_b8b8f2eacac19a22d5e7cf4a15f45f91fb36ac8206ff76e04acff243aa1432ff_prof);

        
        $__internal_516039d707e26f1e5197e9a0e69fb0450f7c7f8bfe2df96dd282e45ddd131afd->leave($__internal_516039d707e26f1e5197e9a0e69fb0450f7c7f8bfe2df96dd282e45ddd131afd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
