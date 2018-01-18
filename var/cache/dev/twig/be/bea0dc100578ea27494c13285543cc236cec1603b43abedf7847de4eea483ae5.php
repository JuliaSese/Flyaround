<?php

/* :review:index.html.twig */
class __TwigTemplate_0868e8a4fc11d1a85e35f892a9d4863451ec9549972e17fd6007ade6049197ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":review:index.html.twig", 1);
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
        $__internal_1e5a47a4a7ebe739905ab2a1955f07a1a0b61e00bf87a3139e1953b530eaf983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5a47a4a7ebe739905ab2a1955f07a1a0b61e00bf87a3139e1953b530eaf983->enter($__internal_1e5a47a4a7ebe739905ab2a1955f07a1a0b61e00bf87a3139e1953b530eaf983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:index.html.twig"));

        $__internal_7f5a88829ea97635fba1f2ddfd3c46fefda46714f8f240c70a6e331b5fe8e479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5a88829ea97635fba1f2ddfd3c46fefda46714f8f240c70a6e331b5fe8e479->enter($__internal_7f5a88829ea97635fba1f2ddfd3c46fefda46714f8f240c70a6e331b5fe8e479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5a47a4a7ebe739905ab2a1955f07a1a0b61e00bf87a3139e1953b530eaf983->leave($__internal_1e5a47a4a7ebe739905ab2a1955f07a1a0b61e00bf87a3139e1953b530eaf983_prof);

        
        $__internal_7f5a88829ea97635fba1f2ddfd3c46fefda46714f8f240c70a6e331b5fe8e479->leave($__internal_7f5a88829ea97635fba1f2ddfd3c46fefda46714f8f240c70a6e331b5fe8e479_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e41f15df594f2e6b01a0a70f28252c16ad63bc7f7622eabf5a361ff223f608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e41f15df594f2e6b01a0a70f28252c16ad63bc7f7622eabf5a361ff223f608->enter($__internal_07e41f15df594f2e6b01a0a70f28252c16ad63bc7f7622eabf5a361ff223f608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faaac26c993a806729831558931826731a1eeec7f17be0310e94c2f964b74a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faaac26c993a806729831558931826731a1eeec7f17be0310e94c2f964b74a5a->enter($__internal_faaac26c993a806729831558931826731a1eeec7f17be0310e94c2f964b74a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Review index</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Texte</th>
            <th>Publicationdate</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "text", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "publicationDate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "note", array()), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_edit", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_new");
        echo "\">Create a new review</a>
    </li>
</ul>

";
        
        $__internal_faaac26c993a806729831558931826731a1eeec7f17be0310e94c2f964b74a5a->leave($__internal_faaac26c993a806729831558931826731a1eeec7f17be0310e94c2f964b74a5a_prof);

        
        $__internal_07e41f15df594f2e6b01a0a70f28252c16ad63bc7f7622eabf5a361ff223f608->leave($__internal_07e41f15df594f2e6b01a0a70f28252c16ad63bc7f7622eabf5a361ff223f608_prof);

    }

    public function getTemplateName()
    {
        return ":review:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  108 => 36,  96 => 30,  90 => 27,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  68 => 19,  64 => 18,  49 => 5,  40 => 4,  11 => 1,);
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
<h1>Review index</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Texte</th>
            <th>Publicationdate</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for review in reviews %}
        <tr>
            <td>{{ review.id }}</td>
            <td>{{  review.text  }}</td>
            <td>{{  review.publicationDate|date('Y-m-d')  }}</td>
            <td>{{ review.note }}</td>
            <td>
                <ul>
                    <li>
                        <a href=\"{{ path('review_show', { 'id': review.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('review_edit', { 'id': review.id }) }}\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<ul>
    <li>
        <a href=\"{{ path('review_new') }}\">Create a new review</a>
    </li>
</ul>

{% endblock %}
", ":review:index.html.twig", "/var/www/html/flyaround/app/Resources/views/review/index.html.twig");
    }
}
