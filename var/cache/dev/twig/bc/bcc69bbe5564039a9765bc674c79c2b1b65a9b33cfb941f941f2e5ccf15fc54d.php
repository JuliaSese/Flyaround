<?php

/* :user:index.html.twig */
class __TwigTemplate_b6173f43d8ddf05a8cdc74c72e8f1131dc0ad429a7697590f76a945276d86da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_85a042aaa3617cccff7b7bebb4c1d3f4494b9e070d86c61e1c73734b652d4e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a042aaa3617cccff7b7bebb4c1d3f4494b9e070d86c61e1c73734b652d4e75->enter($__internal_85a042aaa3617cccff7b7bebb4c1d3f4494b9e070d86c61e1c73734b652d4e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_5a34c350092dfa2dd99d996754b2e67817cd678eb687c58e1f7a719d4dca6a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a34c350092dfa2dd99d996754b2e67817cd678eb687c58e1f7a719d4dca6a0a->enter($__internal_5a34c350092dfa2dd99d996754b2e67817cd678eb687c58e1f7a719d4dca6a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a042aaa3617cccff7b7bebb4c1d3f4494b9e070d86c61e1c73734b652d4e75->leave($__internal_85a042aaa3617cccff7b7bebb4c1d3f4494b9e070d86c61e1c73734b652d4e75_prof);

        
        $__internal_5a34c350092dfa2dd99d996754b2e67817cd678eb687c58e1f7a719d4dca6a0a->leave($__internal_5a34c350092dfa2dd99d996754b2e67817cd678eb687c58e1f7a719d4dca6a0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d189966a0ed70257034e23081a268d3cdd42f307ce990a4315a2eafec25ee996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d189966a0ed70257034e23081a268d3cdd42f307ce990a4315a2eafec25ee996->enter($__internal_d189966a0ed70257034e23081a268d3cdd42f307ce990a4315a2eafec25ee996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94e3d9dd8e374a8e2882601b074dfbc69521da81396ad0afcb13924c5b31ed7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e3d9dd8e374a8e2882601b074dfbc69521da81396ad0afcb13924c5b31ed7d->enter($__internal_94e3d9dd8e374a8e2882601b074dfbc69521da81396ad0afcb13924c5b31ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Creationdate</th>
                <th>Role</th>
                <th>Note</th>
                <th>Isacertifiedpilot</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["user"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["user"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "note", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["user"], "isACertifiedPilot", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_94e3d9dd8e374a8e2882601b074dfbc69521da81396ad0afcb13924c5b31ed7d->leave($__internal_94e3d9dd8e374a8e2882601b074dfbc69521da81396ad0afcb13924c5b31ed7d_prof);

        
        $__internal_d189966a0ed70257034e23081a268d3cdd42f307ce990a4315a2eafec25ee996->leave($__internal_d189966a0ed70257034e23081a268d3cdd42f307ce990a4315a2eafec25ee996_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  157 => 49,  145 => 43,  139 => 40,  128 => 36,  120 => 35,  116 => 34,  112 => 33,  106 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Creationdate</th>
                <th>Role</th>
                <th>Note</th>
                <th>Isacertifiedpilot</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.userName }}</td>
                <td>{{ user.firstName }}</td>
                <td>{{ user.lastName }}</td>
                <td>{{ user.email }}</td>
                <td>{% if user.birthDate %}{{ user.birthDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if user.creationDate %}{{ user.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ user.role }}</td>
                <td>{{ user.note }}</td>
                <td>{% if user.isACertifiedPilot %}Yes{% else %}No{% endif %}</td>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", ":user:index.html.twig", "/var/www/html/flyaround/app/Resources/views/user/index.html.twig");
    }
}
