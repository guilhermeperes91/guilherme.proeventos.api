using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProEventos.Domain
{
    public class Curso
    {
        public int CursoID { get; set; }

        public string NomeCurso { get; set; }

        public int Duracao { get; set; }

        public decimal ValorCurso { get; set; }

        public int QtdParticipantes { get; set; }
    }
}
