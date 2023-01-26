using Microsoft.EntityFrameworkCore;
using ProEventos.Domain;
using ProEventos.Persistence.Contratos;
using ProEventos.Persistense.Contextos;
using System.Linq;
using System.Threading.Tasks;

namespace ProEventos.Persistence
{
    public class EventosPersist : IEventoPersist
    {
        //CONSTRUTOR - INJEÇÃO DE DEPENDENCIA
        private readonly ProEventosContext _context;

        public EventosPersist(ProEventosContext context)
        {
            _context = context;
            //no metodo de update da EventoService, primeiramente ele faz um getbyid e depois o update,
            
            //por esse motivo apresenta erro de track, ou seja, ele fica travado no get e não pode ir pro update
            //inserindo no construtor da classe, ele faz o no tracking para todos os métodos, também pode ser feito em cada metodo
            //_context.ChangeTracker.QueryTrackingBehavior = QueryTrackingBehavior.NoTracking;

        }
        //

        public async Task<Evento[]> GetAllEventosAsync(bool includePalestrantes = false)
        {
            // A CADA EVENTO, INCLUIR LOTES E REDES SOCIAIS 
            IQueryable<Evento> query = _context.Eventos
                .Include(e => e.Lotes)
                .Include(e => e.RedesSociais);

            //A CADA PALESTRANTE EVENTO, INCLUA OS PALESTRANTES (THENINCLUDE)
            if (includePalestrantes)
            {
                query = query
                    .Include(e => e.PalestrantesEventos)
                    .ThenInclude(pe => pe.Palestrante);
            }

            query = query.OrderBy(e => e.Id);

            return await query.AsNoTracking().ToArrayAsync();

        }

        public async Task<Evento[]> GetAllEventosByTemaAsync(string tema, bool includePalestrantes = false)
        {
            // A CADA EVENTO, INCLUIR LOTES E REDES SOCIAIS 
            IQueryable<Evento> query = _context.Eventos
                .Include(e => e.Lotes)
                .Include(e => e.RedesSociais);

            //A CADA PALESTRANTE EVENTO, INCLUA OS PALESTRANTES (THENINCLUDE)
            if (includePalestrantes)
            {
                query = query
                    .Include(e => e.PalestrantesEventos)
                    .ThenInclude(pe => pe.Palestrante);
            }

            query = query.AsNoTracking().OrderBy(e => e.Id)
                //TOLOWER CONSIDERANDO QUE VAI BUSCAR COM CAIXA BAIXA
                .Where(e => e.Tema.ToLower().Contains(tema.ToLower()));

            return await query.ToArrayAsync();
        }

        public async Task<Evento> GetEventoByIdAsync(int EventoId, bool includePalestrantes = false)
        {
            // A CADA EVENTO, INCLUIR LOTES E REDES SOCIAIS 
            IQueryable<Evento> query = _context.Eventos
                .Include(e => e.Lotes)
                .Include(e => e.RedesSociais);

            //A CADA PALESTRANTE EVENTO, INCLUA OS PALESTRANTES (THENINCLUDE)
            if (includePalestrantes)
            {
                query = query
                    .Include(e => e.PalestrantesEventos)
                    .ThenInclude(pe => pe.Palestrante);
            }

            query = query.AsNoTracking().OrderBy(e => e.Id)
                .Where(e => e.Id == EventoId);

            return await query.FirstOrDefaultAsync(); //FIRST OU DEFAULT POIS É A BUSCA DE 1 UNICO REGISTRO
        }

    }
}
