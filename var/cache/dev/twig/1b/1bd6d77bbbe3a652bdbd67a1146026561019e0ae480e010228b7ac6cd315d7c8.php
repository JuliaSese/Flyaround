<?php

/* :review:show.html.twig */
class __TwigTemplate_e860dc028a1383bb8e80c51a0e0f75eea6b98067c1e6f5f9b1b5d230d171a5b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":review:show.html.twig", 1);
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
        $__internal_c1058379d112f32ba5d22d27cb6e72e75a56754092e3ee4595aab4de9f260b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1058379d112f32ba5d22d27cb6e72e75a56754092e3ee4595aab4de9f260b82->enter($__internal_c1058379d112f32ba5d22d27cb6e72e75a56754092e3ee4595aab4de9f260b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:show.html.twig"));

        $__internal_c1e04bfe10ba5bc427ce88070cbc6f156b22a3664ce6e42f96234a03fb5f5073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e04bfe10ba5bc427ce88070cbc6f156b22a3664ce6e42f96234a03fb5f5073->enter($__internal_c1e04bfe10ba5bc427ce88070cbc6f156b22a3664ce6e42f96234a03fb5f5073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1058379d112f32ba5d22d27cb6e72e75a56754092e3ee4595aab4de9f260b82->leave($__internal_c1058379d112f32ba5d22d27cb6e72e75a56754092e3ee4595aab4de9f260b82_prof);

        
        $__internal_c1e04bfe10ba5bc427ce88070cbc6f156b22a3664ce6e42f96234a03fb5f5073->leave($__internal_c1e04bfe10ba5bc427ce88070cbc6f156b22a3664ce6e42f96234a03fb5f5073_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba8c2f976e8658062dfa5880cb914c75c0d86a946532825c6445109096382ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8c2f976e8658062dfa5880cb914c75c0d86a946532825c6445109096382ed8->enter($__internal_ba8c2f976e8658062dfa5880cb914c75c0d86a946532825c6445109096382ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d495fbbdd901e7dfe12857d00f7f6ba459a46b5ecc67b3b3af4f073a47c6e7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d495fbbdd901e7dfe12857d00f7f6ba459a46b5ecc67b3b3af4f073a47c6e7b1->enter($__internal_d495fbbdd901e7dfe12857d00f7f6ba459a46b5ecc67b3b3af4f073a47c6e7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "publicationDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
";
        
        $__internal_d495fbbdd901e7dfe12857d00f7f6ba459a46b5ecc67b3b3af4f073a47c6e7b1->leave($__internal_d495fbbdd901e7dfe12857d00f7f6ba459a46b5ecc67b3b3af4f073a47c6e7b1_prof);

        
        $__internal_ba8c2f976e8658062dfa5880cb914c75c0d86a946532825c6445109096382ed8->leave($__internal_ba8c2f976e8658062dfa5880cb914c75c0d86a946532825c6445109096382ed8_prof);

    }

    public function getTemplateName()
    {
        return ":review:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  89 => 28,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Review</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ review.id }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ review.text }}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ review.note }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
    </ul>
{% endblock %}
", ":review:show.html.twig", "/var/www/html/flyaround/app/Resources/views/review/show.html.twig");
    }
}
