<?php

/* formdata.html.twig */
class __TwigTemplate_ef177058fd9b0e7c7d7a718927ab6cea79be98acf404e3fe6ca8784c331bd6e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"about\">
    <div class=\"row\">
        <div class=\"nine columns main-col\">
            <h2>";
        // line 6
        echo $this->getAttribute(($context["form"] ?? null), "message", array());
        echo "</h2>
            ";
        // line 7
        echo ($context["content"] ?? null);
        echo "

            ";
        // line 9
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 9)->display($context);
        echo " <br />
            Back to <a href=\"";
        // line 10
        echo ($context["base_url_absolute"] ?? null);
        echo "\">homepage</a>.
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  45 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<section id=\"about\">
    <div class=\"row\">
        <div class=\"nine columns main-col\">
            <h2>{{ form.message }}</h2>
            {{ content }}

            {% include \"forms/data.html.twig\" %} <br />
            Back to <a href=\"{{ base_url_absolute }}\">homepage</a>.
        </div>
    </div>
</section>
{% endblock %}
", "formdata.html.twig", "/storage/ssd4/593/2290593/public_html/user/themes/ceevee/templates/formdata.html.twig");
    }
}
