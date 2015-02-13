<?php

/* /var/www/html/october/themes/jtherczeg-corlate/partials/top.htm */
class __TwigTemplate_b409d8ca3314d0bc44ca26c0f5d87506234cce162160ecbdc62b793c0ecf0dbd extends Twig_Template
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
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
\t</div><!--/.top-bar-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/jtherczeg-corlate/partials/top.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
