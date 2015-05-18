<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\shuwaxDlugoscType;

use Shuwax\Tools\Dlugosc;
class shuwaxDlugoscController extends Controller
{
    /**
     * @Route("/shuwax/dlugosc/show/form", name="shuwax_dlugosc_show_form")
     */
    public function showFormAction()
    {
        $dlugosc = new Dlugosc();
        $form = $this->createCreateForm($dlugosc);
        return $this->render(
            'AppBundle:shuwaxDlugosc:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/shuwax/dlugosc/sortuj", name="shuwax_dlugosc_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $dlugosc = new Dlugosc();
        $form = $this->createCreateForm($dlugosc);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:shuwaxDlugosc:wynik.html.twig',
                array('wynik' => $dlugosc->dlugosc())
            );
        }
        return $this->render(
            'AppBundle:shuwaxDlugosc:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Dlugosc $dlugosc The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dlugosc $dlugosc)
    {
        $form = $this->createForm(new shuwaxDlugoscType(), $dlugosc, array(
            'action' => $this->generateUrl('shuwax_dlugosc_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Sortuj'));
        return $form;
    }
}