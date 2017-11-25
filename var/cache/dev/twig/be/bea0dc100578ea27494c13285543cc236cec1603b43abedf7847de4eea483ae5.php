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
        $__internal_50672bc8fbb09ce8fc288d150e0a2dddcb5602c08e821ecf039a4981626eef54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50672bc8fbb09ce8fc288d150e0a2dddcb5602c08e821ecf039a4981626eef54->enter($__internal_50672bc8fbb09ce8fc288d150e0a2dddcb5602c08e821ecf039a4981626eef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_02f23bef8d008ca6153d25affe1f581a32026c5b302cf758c5711f658691b95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f23bef8d008ca6153d25affe1f581a32026c5b302cf758c5711f658691b95d->enter($__internal_02f23bef8d008ca6153d25affe1f581a32026c5b302cf758c5711f658691b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50672bc8fbb09ce8fc288d150e0a2dddcb5602c08e821ecf039a4981626eef54->leave($__internal_50672bc8fbb09ce8fc288d150e0a2dddcb5602c08e821ecf039a4981626eef54_prof);

        
        $__internal_02f23bef8d008ca6153d25affe1f581a32026c5b302cf758c5711f658691b95d->leave($__internal_02f23bef8d008ca6153d25affe1f581a32026c5b302cf758c5711f658691b95d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd69949c49182ffda60ec75f4f9bb745ef5cf58f508a38fc4b442c62cdb2a06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd69949c49182ffda60ec75f4f9bb745ef5cf58f508a38fc4b442c62cdb2a06f->enter($__internal_cd69949c49182ffda60ec75f4f9bb745ef5cf58f508a38fc4b442c62cdb2a06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef04313919cb88d0af2d5ae9b274b5cc52429aac3f7c90812bf10eeb875d67ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef04313919cb88d0af2d5ae9b274b5cc52429aac3f7c90812bf10eeb875d67ee->enter($__internal_ef04313919cb88d0af2d5ae9b274b5cc52429aac3f7c90812bf10eeb875d67ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef04313919cb88d0af2d5ae9b274b5cc52429aac3f7c90812bf10eeb875d67ee->leave($__internal_ef04313919cb88d0af2d5ae9b274b5cc52429aac3f7c90812bf10eeb875d67ee_prof);

        
        $__internal_cd69949c49182ffda60ec75f4f9bb745ef5cf58f508a38fc4b442c62cdb2a06f->leave($__internal_cd69949c49182ffda60ec75f4f9bb745ef5cf58f508a38fc4b442c62cdb2a06f_prof);

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
", "review/index.html.twig", "/var/www/html/flyaround/app/Resources/views/review/index.html.twig");
    }
}
