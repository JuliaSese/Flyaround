<?php

/* user/index.html.twig */
class __TwigTemplate_b6173f43d8ddf05a8cdc74c72e8f1131dc0ad429a7697590f76a945276d86da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_60a1f07b51fee287a7b1308c945cdc1bfc6ee19a2ed336946a805428212fa061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a1f07b51fee287a7b1308c945cdc1bfc6ee19a2ed336946a805428212fa061->enter($__internal_60a1f07b51fee287a7b1308c945cdc1bfc6ee19a2ed336946a805428212fa061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_d660922f82a16fbae0e658ee4dbc1b5948e9be55f5430c124247eac9ae3fecb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d660922f82a16fbae0e658ee4dbc1b5948e9be55f5430c124247eac9ae3fecb8->enter($__internal_d660922f82a16fbae0e658ee4dbc1b5948e9be55f5430c124247eac9ae3fecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a1f07b51fee287a7b1308c945cdc1bfc6ee19a2ed336946a805428212fa061->leave($__internal_60a1f07b51fee287a7b1308c945cdc1bfc6ee19a2ed336946a805428212fa061_prof);

        
        $__internal_d660922f82a16fbae0e658ee4dbc1b5948e9be55f5430c124247eac9ae3fecb8->leave($__internal_d660922f82a16fbae0e658ee4dbc1b5948e9be55f5430c124247eac9ae3fecb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a932c599da1c520ff4788d40dc5f1c12b401c66f0c344f652bf2d2cdb2f18a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a932c599da1c520ff4788d40dc5f1c12b401c66f0c344f652bf2d2cdb2f18a00->enter($__internal_a932c599da1c520ff4788d40dc5f1c12b401c66f0c344f652bf2d2cdb2f18a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74f6a8c39414deb2000c58400f825986643273d3f32ab820ff5ff0570a09cc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f6a8c39414deb2000c58400f825986643273d3f32ab820ff5ff0570a09cc6f->enter($__internal_74f6a8c39414deb2000c58400f825986643273d3f32ab820ff5ff0570a09cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Reviews</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["user"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["user"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "note", array()), "html", null, true);
            echo "</td>
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "reviews", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 37
                echo "                    <td>";
                echo twig_escape_filter($this->env, $context["review"], "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                <td>";
            if ($this->getAttribute($context["user"], "isACertifiedPilot", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 40
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
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
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
        // line 53
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_74f6a8c39414deb2000c58400f825986643273d3f32ab820ff5ff0570a09cc6f->leave($__internal_74f6a8c39414deb2000c58400f825986643273d3f32ab820ff5ff0570a09cc6f_prof);

        
        $__internal_a932c599da1c520ff4788d40dc5f1c12b401c66f0c344f652bf2d2cdb2f18a00->leave($__internal_a932c599da1c520ff4788d40dc5f1c12b401c66f0c344f652bf2d2cdb2f18a00_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 58,  172 => 53,  160 => 47,  154 => 44,  143 => 40,  134 => 39,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  107 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  79 => 27,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Reviews</th>
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
                {% for review in user.reviews %}
                    <td>{{ review }}</td>
                {% endfor %}
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
", "user/index.html.twig", "/var/www/html/flyaround/app/Resources/views/user/index.html.twig");
    }
}
