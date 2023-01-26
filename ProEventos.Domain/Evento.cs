using System;
using System.Collections.Generic;

namespace ProEventos.Domain
{
    public class Evento //classe responsavel pelos dados do evento
    {
        public int Id { get; set; }

        public string Local { get; set; }

        public DateTime? DataEvento { get; set; } //? = pode ser nulo

        public string Tema { get; set; }

        public int QtdPessoas { get; set; }

        public string ImagemURL { get; set; }

        public string Telefone { get; set; }

        public string Email { get; set; }

        public IEnumerable<Lote> Lotes { get; set; } //IENUMERABLE = LISTA

        public IEnumerable<RedeSocial> RedesSociais { get; set; }

        //Associacao de palestrante/evento
        public IEnumerable<PalestranteEvento> PalestrantesEventos { get; set; }



    }
}
