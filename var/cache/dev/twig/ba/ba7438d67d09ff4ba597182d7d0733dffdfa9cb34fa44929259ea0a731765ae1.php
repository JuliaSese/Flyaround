<?php

/* reservation/new.html.twig */
class __TwigTemplate_b3dce310b24d800a70047da77c489fead04050bdd60761e7ee9ab72f3fe4f956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b46f73de266267459b1d5551be29da7f1f1b22f0a60f4f6d6f1d660663b1e871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46f73de266267459b1d5551be29da7f1f1b22f0a60f4f6d6f1d660663b1e871->enter($__internal_b46f73de266267459b1d5551be29da7f1f1b22f0a60f4f6d6f1d660663b1e871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_bb2eee166e5183180abb905ce4d131bb90b08ea7dacb409ed2e1f094fe325742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2eee166e5183180abb905ce4d131bb90b08ea7dacb409ed2e1f094fe325742->enter($__internal_bb2eee166e5183180abb905ce4d131bb90b08ea7dacb409ed2e1f094fe325742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b46f73de266267459b1d5551be29da7f1f1b22f0a60f4f6d6f1d660663b1e871->leave($__internal_b46f73de266267459b1d5551be29da7f1f1b22f0a60f4f6d6f1d660663b1e871_prof);

        
        $__internal_bb2eee166e5183180abb905ce4d131bb90b08ea7dacb409ed2e1f094fe325742->leave($__internal_bb2eee166e5183180abb905ce4d131bb90b08ea7dacb409ed2e1f094fe325742_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d9fbeadf12060729343f7708b54b0b1d042ae0a0e578ee13ec3b322a27d291f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9fbeadf12060729343f7708b54b0b1d042ae0a0e578ee13ec3b322a27d291f->enter($__internal_6d9fbeadf12060729343f7708b54b0b1d042ae0a0e578ee13ec3b322a27d291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8adead868795fa05229c3992442668a63672fd1d195a48fb67705a29eb7eb85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adead868795fa05229c3992442668a63672fd1d195a48fb67705a29eb7eb85b->enter($__internal_8adead868795fa05229c3992442668a63672fd1d195a48fb67705a29eb7eb85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8adead868795fa05229c3992442668a63672fd1d195a48fb67705a29eb7eb85b->leave($__internal_8adead868795fa05229c3992442668a63672fd1d195a48fb67705a29eb7eb85b_prof);

        
        $__internal_6d9fbeadf12060729343f7708b54b0b1d042ae0a0e578ee13ec3b322a27d291f->leave($__internal_6d9fbeadf12060729343f7708b54b0b1d042ae0a0e578ee13ec3b322a27d291f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "reservation/new.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/reservation/new.html.twig");
    }
}
