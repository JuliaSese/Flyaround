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
        $__internal_32b66ee93ad202d8ef6dba39423e3ff91fff1bfd1b44ba4c422e56c1ab3cf2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b66ee93ad202d8ef6dba39423e3ff91fff1bfd1b44ba4c422e56c1ab3cf2b3->enter($__internal_32b66ee93ad202d8ef6dba39423e3ff91fff1bfd1b44ba4c422e56c1ab3cf2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:show.html.twig"));

        $__internal_98981822fb85449d7d864a72c489dd6e8fc72c48105f5fe811c61b6e65edbdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98981822fb85449d7d864a72c489dd6e8fc72c48105f5fe811c61b6e65edbdb2->enter($__internal_98981822fb85449d7d864a72c489dd6e8fc72c48105f5fe811c61b6e65edbdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b66ee93ad202d8ef6dba39423e3ff91fff1bfd1b44ba4c422e56c1ab3cf2b3->leave($__internal_32b66ee93ad202d8ef6dba39423e3ff91fff1bfd1b44ba4c422e56c1ab3cf2b3_prof);

        
        $__internal_98981822fb85449d7d864a72c489dd6e8fc72c48105f5fe811c61b6e65edbdb2->leave($__internal_98981822fb85449d7d864a72c489dd6e8fc72c48105f5fe811c61b6e65edbdb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f66f20e4243f757036fad2fdb0404196d6902c0ed9e5fea21eecbdd1edd0b3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66f20e4243f757036fad2fdb0404196d6902c0ed9e5fea21eecbdd1edd0b3f4->enter($__internal_f66f20e4243f757036fad2fdb0404196d6902c0ed9e5fea21eecbdd1edd0b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f18bf26b6ea8d70cfd93ff093d83042990cf72d4466b1f9e7e996f11e311bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f18bf26b6ea8d70cfd93ff093d83042990cf72d4466b1f9e7e996f11e311bc->enter($__internal_93f18bf26b6ea8d70cfd93ff093d83042990cf72d4466b1f9e7e996f11e311bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
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
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_edit", array("id" => $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_93f18bf26b6ea8d70cfd93ff093d83042990cf72d4466b1f9e7e996f11e311bc->leave($__internal_93f18bf26b6ea8d70cfd93ff093d83042990cf72d4466b1f9e7e996f11e311bc_prof);

        
        $__internal_f66f20e4243f757036fad2fdb0404196d6902c0ed9e5fea21eecbdd1edd0b3f4->leave($__internal_f66f20e4243f757036fad2fdb0404196d6902c0ed9e5fea21eecbdd1edd0b3f4_prof);

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
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ review.note }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('review_edit', { 'id': review.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":review:show.html.twig", "/var/www/html/flyaround/app/Resources/views/review/show.html.twig");
    }
}
