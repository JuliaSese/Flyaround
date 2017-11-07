<?php

/* review/index.html.twig */
class __TwigTemplate_0868e8a4fc11d1a85e35f892a9d4863451ec9549972e17fd6007ade6049197ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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
        $__internal_55b4c0d3656961e5670b89521bd2770f4ef68f19fdd6fe1ab0bd0e6624442aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b4c0d3656961e5670b89521bd2770f4ef68f19fdd6fe1ab0bd0e6624442aaa->enter($__internal_55b4c0d3656961e5670b89521bd2770f4ef68f19fdd6fe1ab0bd0e6624442aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_f9dbbba3ef0db61ce7bb6d209f2135f5c5447cafab1907a46435c556937bfdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dbbba3ef0db61ce7bb6d209f2135f5c5447cafab1907a46435c556937bfdd6->enter($__internal_f9dbbba3ef0db61ce7bb6d209f2135f5c5447cafab1907a46435c556937bfdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b4c0d3656961e5670b89521bd2770f4ef68f19fdd6fe1ab0bd0e6624442aaa->leave($__internal_55b4c0d3656961e5670b89521bd2770f4ef68f19fdd6fe1ab0bd0e6624442aaa_prof);

        
        $__internal_f9dbbba3ef0db61ce7bb6d209f2135f5c5447cafab1907a46435c556937bfdd6->leave($__internal_f9dbbba3ef0db61ce7bb6d209f2135f5c5447cafab1907a46435c556937bfdd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d5de7659e5a77c47c3a2be2811c2fe49d41649d6dab3150dfc8f31fcf11be05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5de7659e5a77c47c3a2be2811c2fe49d41649d6dab3150dfc8f31fcf11be05->enter($__internal_8d5de7659e5a77c47c3a2be2811c2fe49d41649d6dab3150dfc8f31fcf11be05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9babbaaa953bbe4ec16387e098dd66d6e4468ddc2c89869230a040c345a3d2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9babbaaa953bbe4ec16387e098dd66d6e4468ddc2c89869230a040c345a3d2aa->enter($__internal_9babbaaa953bbe4ec16387e098dd66d6e4468ddc2c89869230a040c345a3d2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reviews list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>Publicationdate</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["review"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "note", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_new");
        echo "\">Create a new review</a>
        </li>
    </ul>
";
        
        $__internal_9babbaaa953bbe4ec16387e098dd66d6e4468ddc2c89869230a040c345a3d2aa->leave($__internal_9babbaaa953bbe4ec16387e098dd66d6e4468ddc2c89869230a040c345a3d2aa_prof);

        
        $__internal_8d5de7659e5a77c47c3a2be2811c2fe49d41649d6dab3150dfc8f31fcf11be05->leave($__internal_8d5de7659e5a77c47c3a2be2811c2fe49d41649d6dab3150dfc8f31fcf11be05_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reviews list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>Publicationdate</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for review in reviews %}
            <tr>
                <td><a href=\"{{ path('review_show', { 'id': review.id }) }}\">{{ review.id }}</a></td>
                <td>{{ review.text }}</td>
                <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
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
", "review/index.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/review/index.html.twig");
    }
}