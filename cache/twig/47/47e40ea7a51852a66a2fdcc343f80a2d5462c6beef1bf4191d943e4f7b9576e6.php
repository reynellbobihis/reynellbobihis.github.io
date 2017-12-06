<?php

/* @Var:{{ config.plugins.email.to }} */
class __TwigTemplate_933bc5d82130e6fed256fe817b0024d8689a9c3963173c80e2c21a2d4a430a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "email", array()), "to", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ config.plugins.email.to }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ config.plugins.email.to }}", "@Var:{{ config.plugins.email.to }}", "");
    }
}
