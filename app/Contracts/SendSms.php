<?php

namespace App\Contracts; // Deklarimi i hapësirës së emrit (namespace)

/**
 * Interface për dërgimin e mesazheve SMS.
 * 
 * Çdo klasë që implementon këtë interface duhet të zbatojë metodën `send()`.
 */
interface SendSms {
   
    /**
     * Metoda për dërgimin e një SMS-i.
     *
     * @param string $to Marrësi i mesazhit (numri i telefonit).
     * @param string $from Dërguesi i mesazhit (mund të jetë një emër ose numër).
     * @param string $text Përmbajtja e mesazhit.
     * @param int|string $template_id Opsionale – ID e një template-i nëse përdoret një shabllon.
     * 
     * @return mixed Mund të kthejë një përgjigje të API-së ose një status të dërgimit.
     */
    public function send($to, $from, $text, $template_id);
}
