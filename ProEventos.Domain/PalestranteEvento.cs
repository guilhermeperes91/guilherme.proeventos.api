namespace ProEventos.Domain
{
     //A classe palestranteevento é pra fazer a associação entre eventos e palestrantes, visto que
     //pode haver varios palestrantes em 1 evento, assim como pode haver o mesmo palestrante em varios eventos
    public class PalestranteEvento
    {
        public int PalestranteId { get; set; }

        public Palestrante Palestrante { get; set; }

        public int EventoId { get; set; }

        public Evento Evento { get; set; }

    }
}
